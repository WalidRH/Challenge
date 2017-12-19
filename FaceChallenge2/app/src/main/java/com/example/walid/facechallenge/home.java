package com.example.walid.facechallenge;

import android.os.StrictMode;
import android.provider.MediaStore;
import android.support.v7.app.AppCompatActivity;
import android.os.Bundle;
import android.util.Log;
import android.view.View;
import android.widget.ArrayAdapter;
import android.widget.GridView;

import com.facebook.AccessToken;
import com.facebook.CallbackManager;
import com.facebook.GraphRequest;
import com.facebook.GraphResponse;
import com.facebook.HttpMethod;
import com.facebook.ProfileTracker;

import org.json.JSONArray;
import org.json.JSONException;
import org.json.JSONObject;

import java.util.ArrayList;

public class home extends AppCompatActivity {
    CallbackManager callbackManager;
    ProfileTracker profileTracker;
    GridView simpleList ;
    ArrayList<FaceImage> lstFBImages ;
   // ArrayAdapter<MyAdapter> myAdapters;
    @Override
    public void onCreate(Bundle savedInstanceState) {

        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_home);
        simpleList = (GridView) findViewById(R.id.simpleGridView);
        lstFBImages = new ArrayList<FaceImage>();
        //myAdapters = new ArrayAdapter<MyAdapter>(this,R.layout.activity_grid_image);
        new GraphRequest(
                AccessToken.getCurrentAccessToken(),  //your fb AccessToken
                "/" + AccessToken.getCurrentAccessToken().getUserId() + "/albums",//user id of login user
                null,
                HttpMethod.GET,
                new GraphRequest.Callback() {
                    public void onCompleted(GraphResponse response) {
                        Log.d("TAG", "Facebook Albums: " + response.toString());
                        try {
                            if (response.getError() == null) {
                                JSONObject joMain = response.getJSONObject(); //convert GraphResponse response to JSONObject
                                if (joMain.has("data")) {
                                    JSONArray jaData = joMain.optJSONArray("data"); //find JSONArray from JSONObject
                                    //alFBAlbum = new ArrayList<>();
                                    for (int i = 0; i < jaData.length(); i++) {//find no. of album using jaData.length()
                                        JSONObject joAlbum = jaData.getJSONObject(i); //convert perticular album into JSONObject
                                        GetFacebookImages(joAlbum.optString("id")); //find Album ID and get All Images from album
                                    }

                                   // simpleList.setAdapter(myAdapters);
                                }
                            } else {
                                Log.d("Test", response.getError().toString());
                            }
                        } catch (JSONException e) {
                            e.printStackTrace();
                        }
                    }
                }
        ).executeAsync();
    lstFBImages.clear();

    }
    public void GetFacebookImages(final String albumId) {
//        String url = "https://graph.facebook.com/" + "me" + "/"+albumId+"/photos?access_token=" + AccessToken.getCurrentAccessToken() + "&fields=images";
        Bundle parameters = new Bundle();
        parameters.putString("fields", "images");
        /* make the API call */
        new GraphRequest(
                AccessToken.getCurrentAccessToken(),
                "/" + albumId + "/photos",
                parameters,
                HttpMethod.GET,
                new GraphRequest.Callback() {
                    public void onCompleted(GraphResponse response) {
            /* handle the result */
                        Log.v("TAG", "Facebook Photos response: " + response);
                        //tvTitle.setText("Facebook Images");
                        try {
                            if (response.getError() == null) {


                                JSONObject joMain = response.getJSONObject();

                                if (joMain.has("data")) {
                                    JSONArray jaData = joMain.optJSONArray("data");
                                   // lstFBImages = new ArrayList<>();
                                    for (int i = 0; i < jaData.length(); i++)//Get no. of images {
                                        try {
                                            JSONObject joAlbum = jaData.getJSONObject(i);
                                            JSONArray jaImages = joAlbum.getJSONArray("images"); //get images Array in JSONArray format
                                            Log.v("lenght",""+jaImages.length());
                                            if (jaImages.length() > 0) {
                                                StrictMode.ThreadPolicy policy = new StrictMode.ThreadPolicy.Builder().permitAll().build();// create new thread to get facebook imagess
                                                StrictMode.setThreadPolicy(policy);
                                                FaceImage objImages = new FaceImage();//Images is custom class with string url field

                                                objImages.setImage_url(jaImages.getJSONObject(0).getString("source"));
                                                Log.e("nn",""+jaImages.getJSONObject(0).getString("source"));
                                                lstFBImages.add(lstFBImages.size(),objImages);//lstFBImages is Images object array

                                            }
                                        } catch (JSONException e1) {
                                            e1.printStackTrace();
                                        }
                                    Log.e("Size","Total "+lstFBImages.size());
                                    MyAdapter adapter = new MyAdapter(getApplicationContext(),lstFBImages);
                                    simpleList.setAdapter(adapter);


                                }

                                //set your adapter here
                                Log.e("Size","Each album"+lstFBImages.size());


                            } else {
                                Log.v("TAG", response.getError().toString());
                            }
                        } catch (Exception e) {
                            e.printStackTrace();
                        }

                    }
                }
        ).executeAsync();


    }
}

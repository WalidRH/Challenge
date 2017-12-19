package com.example.walid.facechallenge;

import android.graphics.Bitmap;
import android.graphics.BitmapFactory;
import android.util.Log;

import java.io.IOException;
import java.io.InputStream;
import java.net.HttpURLConnection;
import java.net.MalformedURLException;
import java.net.URL;

/**
 * Created by walid on 16/12/17.
 */

public class FaceImage {


    Bitmap ImageURL;

    public FaceImage() {
    }
    public void setImage_url(String src){
        try {
            URL url = new URL(src);
            HttpURLConnection connection = (HttpURLConnection) url.openConnection();
            connection.setDoInput(true);
            connection.connect();
            InputStream input = connection.getInputStream();
            Bitmap myBitmap = BitmapFactory.decodeStream(input);
            ImageURL= myBitmap;
        } catch (IOException e) {
            Log.e("Error","Cant connect");
        }

    }
    public Bitmap getImageURL() {
        return ImageURL;
    }

}

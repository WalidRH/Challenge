package com.example.walid.facechallenge;

import android.content.Context;
import android.view.LayoutInflater;
import android.view.View;
import android.view.ViewGroup;
import android.widget.ArrayAdapter;
import android.widget.BaseAdapter;
import android.widget.ImageView;

import com.facebook.GraphRequest;

import java.util.ArrayList;

/**
 * Created by walid on 16/12/17.
 */

public class MyAdapter extends BaseAdapter {
    Context context;
    ArrayList<FaceImage> logos;
    LayoutInflater inflter;
    public MyAdapter(Context applicationContext, ArrayList<FaceImage> logos) {
        this.context = applicationContext;
        this.logos = logos;
        inflter = (LayoutInflater.from(applicationContext));
    }
    @Override
    public int getCount() {
        return logos.size();
    }
    @Override
    public Object getItem(int i) {
        return null;
    }
    @Override
    public long getItemId(int i) {
        return 0;
    }
    @Override
    public View getView(int position, View view, ViewGroup viewGroup) {
        view = inflter.inflate(R.layout.activity_grid_image, null); // inflate the layout
        ImageView icon = (ImageView) view.findViewById(R.id.imageView); // get the reference of ImageView
        icon.setImageBitmap(logos.get(position).getImageURL()); // set logo images
        return view;
    }
}

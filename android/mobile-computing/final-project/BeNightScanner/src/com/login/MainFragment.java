package com.login;

import java.util.HashMap;

import android.app.Activity;
import android.app.Fragment;
import android.content.Intent;
import android.os.Bundle;
import android.support.v4.app.FragmentActivity;
import android.view.LayoutInflater;
import android.view.View;
import android.view.ViewGroup;
import android.widget.Button;
import android.widget.TextView;

import com.benight.benightscanner.R;
import com.events.GetEvents;
import com.login.library.DatabaseHandler;
import com.login.library.UserFunctions;
import com.navigation.NavigationDrawer;
import com.scan.SimpleScan;

public class MainFragment extends Fragment {
    Button btnLogout;
    Button changepas;
    Button scan;
    Button getEvents;
    Button navigation;

    @Override
    public View onCreateView(LayoutInflater inflater, ViewGroup container, Bundle savedInstanceState){
    	return inflater.inflate(R.layout.main, container, false);
    }
    
    
    /**
     * Called when the activity is first created.
     */
    @Override
    public void onStart() {
        super.onStart();

        changepas = (Button) getView().findViewById(R.id.btchangepass);
        btnLogout = (Button) getView().findViewById(R.id.logout);

        DatabaseHandler db = new DatabaseHandler(getActivity());

        /**
         * Hashmap to load data from the Sqlite database
         **/
         HashMap<String,String> user = new HashMap<String, String>();
         user = db.getUserDetails();


        /**
         * Change Password Activity Started
         **/
        changepas.setOnClickListener(new View.OnClickListener(){
            public void onClick(View arg0){

                Intent chgpass = new Intent(getActivity(), ChangePassword.class);

                startActivity(chgpass);
            }

        });

       /**
        *Logout from the User Panel which clears the data in Sqlite database
        **/
        btnLogout.setOnClickListener(new View.OnClickListener() {

            public void onClick(View arg0) {

                UserFunctions logout = new UserFunctions();
                logout.logoutUser(getActivity());
                Intent login = new Intent(getActivity(), Login.class);
                login.addFlags(Intent.FLAG_ACTIVITY_CLEAR_TOP);
                startActivity(login);
                getActivity().finish();
            }
        });
/**
 * Sets user first name and last name in text view.
 **/
        final TextView login = (TextView) getView().findViewById(R.id.textwelcome);
        login.setText("Welcome  "+user.get("fname"));
        final TextView lname = (TextView) getView().findViewById(R.id.lname);
        lname.setText(user.get("lname"));


    }}
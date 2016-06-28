package com.events;

import java.io.BufferedReader;
import java.io.IOException;
import java.io.InputStream;
import java.io.InputStreamReader;
import java.util.ArrayList;
import java.util.HashMap;
import java.util.List;
import java.util.Map;

import org.apache.http.HttpResponse;
import org.apache.http.client.ClientProtocolException;
import org.apache.http.client.HttpClient;
import org.apache.http.client.methods.HttpPost;
import org.apache.http.impl.client.DefaultHttpClient;
import org.json.JSONArray;
import org.json.JSONException;
import org.json.JSONObject;

import android.app.Activity;
import android.os.AsyncTask;
import android.util.Log;
import android.widget.ListView;
import android.widget.SimpleAdapter;
import android.widget.Toast;

import com.benight.benightscanner.R;
import com.scan.SimpleScan;

public class GetTickets extends Activity {
	private String jsonResult;
	private String url = "http://socio1305.altervista.org/getTickets.php?id=";
	private String getResult;

	// Async Task to access the web
	private class JsonReadTask extends AsyncTask<String, Void, String> {
		@Override
		protected String doInBackground(String... params) {
			HttpClient httpclient = new DefaultHttpClient();
			HttpPost httppost = new HttpPost(params[0]);
			try {
				HttpResponse response = httpclient.execute(httppost);
				jsonResult = inputStreamToString(
						response.getEntity().getContent()).toString();
			}

			catch (ClientProtocolException e) {
				e.printStackTrace();
			} catch (IOException e) {
				e.printStackTrace();
			}
			return null;
		}

		private StringBuilder inputStreamToString(InputStream is) {
			String rLine = "";
			StringBuilder answer = new StringBuilder();
			BufferedReader rd = new BufferedReader(new InputStreamReader(is));

			try {
				while ((rLine = rd.readLine()) != null) {
					answer.append(rLine);
				}
			}

			catch (IOException e) {
				// e.printStackTrace();
				Toast.makeText(getApplicationContext(),
						"Error..." + e.toString(), Toast.LENGTH_LONG).show();
			}
			return answer;
		}

		@Override
		protected void onPostExecute(String result) {
			ListDrwaer();
		}
	}// end async task

	public String getTicketStatus(String id, String qr) {
		JsonReadTask task = new JsonReadTask();
		// passes values for the urls string array
		url = url + id + "&qr=" + qr;
		task.execute(new String[] { url });
		return getResult;
	}

	// build hash set for list view
	private void ListDrwaer() {
		Log.v("JSONResponse", jsonResult);
		if (jsonResult.equals("1"))
			getResult  = "Valid Ticket";
		else if (jsonResult.equals("0"))
			getResult  = "Ticket Already Checked";
		else if (jsonResult.equals("-1"))
			getResult  = "Invalid Ticket";
		else
			getResult  = "Error Scanning the Ticket";
		Log.v("Result", getResult);
	}
}

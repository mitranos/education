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
import android.app.Fragment;
import android.os.AsyncTask;
import android.os.Bundle;
import android.view.LayoutInflater;
import android.view.Menu;
import android.view.ViewGroup;
import android.widget.AdapterView;
import android.widget.AdapterView.OnItemClickListener;
import android.widget.ListView;
import android.widget.SimpleAdapter;
import android.widget.Toast;
import android.view.View;
import android.content.Intent;
import android.graphics.Color;

import com.benight.benightscanner.R;
import com.scan.SimpleScan;

public class GetEventsFragment extends Fragment {
	private String jsonResult;
	private String url = "http://socio1305.altervista.org/get_events.php";
	private ListView listView;

    @Override
    public View onCreateView(LayoutInflater inflater, ViewGroup container, Bundle savedInstanceState){
    	return inflater.inflate(R.layout.getevents, container, false);
    }
	
	@Override
	public void onStart() {
		super.onStart();

		listView = (ListView) getView().findViewById(R.id.listView1);
		accessWebService();
		
		listView.setOnItemClickListener(new OnItemClickListener() {
			@Override
			public void onItemClick(AdapterView<?> parent, View view,
					int position, long id) {
			    // When clicked
				HashMap<String, String> hashmap =(HashMap<String, String>) parent.getItemAtPosition(position);
				String val = hashmap.get("event");
				String[] tokens = val.split("-");
				String idVal = tokens[1];
				Intent intent = new Intent(getActivity(), SimpleScan.class);
	            intent.putExtra("id", idVal);
	            startActivity(intent);
			}
		});
	}


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
				Toast.makeText(getActivity(),
						"Error..." + e.toString(), Toast.LENGTH_LONG).show();
			}
			return answer;
		}

		@Override
		protected void onPostExecute(String result) {
			ListDrwaer();
		}
	}// end async task

	public void accessWebService() {
		JsonReadTask task = new JsonReadTask();
		// passes values for the urls string array
		task.execute(new String[] { url });
	}

	// build hash set for list view
	public void ListDrwaer() {
		List<Map<String, String>> eventList = new ArrayList<Map<String, String>>();

		try {
			JSONObject jsonResponse = new JSONObject(jsonResult);
			JSONArray jsonMainNode = jsonResponse.optJSONArray("eventi");

			for (int i = 0; i < jsonMainNode.length(); i++) {
				JSONObject jsonChildNode = jsonMainNode.getJSONObject(i);
				String name = jsonChildNode.optString("nome");
				String number = jsonChildNode.optString("id_evento");
				String outPut = name + "-" + number;
				eventList.add(createEvent("event", outPut));
			}
		} catch (JSONException e) {
			Toast.makeText(getActivity(), "Error" + e.toString(),
					Toast.LENGTH_SHORT).show();
		}
		
		SimpleAdapter simpleAdapter = new SimpleAdapter(getActivity(), eventList,
				R.layout.mytextview,
				new String[] { "event" }, new int[] { android.R.id.text1 });
		
		listView.setAdapter(simpleAdapter);
	}

	private HashMap<String, String> createEvent(String name, String number) {
		HashMap<String, String> eventNameNo = new HashMap<String, String>();
		eventNameNo.put(name, number);
		return eventNameNo;
	}
}

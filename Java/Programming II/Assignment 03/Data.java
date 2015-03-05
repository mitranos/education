/**
 *
 * File:         Data.java
 * Purpose:      Save and get data from a file <data.dat> to store all the info of a list.
 * Project:      CSIS 3100 Assignment 03
 *
 * (c) Copyright Salvatore Mitrano 2013 All rights reserved.
 **/
import java.util.*;
import java.io.*;


public class Data {

	private PrintWriter pwOutput;
	private File file = new File("data.dat");
	private BufferedReader bf;

	public void saveFile(ArrayList<String> wordList){
		if(wordList.isEmpty()){
			System.out.print("There is nothing to Save!");
		}else{
			try {
				pwOutput = new PrintWriter(file);

				for (int i = 0; i < wordList.size(); i++){
					pwOutput.println(wordList.get(i));
				}
				pwOutput.close();
			}catch (Exception e ){
				e.printStackTrace();
			}
			System.out.print("The File has been saved.");
		}
	}

	public ArrayList<String> readFile(ArrayList<String> wordList){
		try{
			wordList.clear();
			String name;
			bf = new BufferedReader(new FileReader("data.dat"));
			while((name = bf.readLine()) != null ){
				wordList.add(name);
			}
		} catch (Exception e) {
			e.printStackTrace();
		} finally {
			try {
				bf.close();
			} catch (Exception e) {
				e.printStackTrace();
			}	
		}
		System.out.print("Data from the File has been loaded.");
		return wordList;
	}
}

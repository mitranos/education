/**
 *
 * File:         Data.java
 * Purpose:      Save and get data from a file <JobQueue.dat> to store all the info into a list and return it.
 * Project:      CSIS 3400 Assignment 04
 *
 * (c) Copyright Salvatore Mitrano 2014 All rights reserved.
 **/
import java.util.*;
import java.io.*;


public class Data {
	private BufferedReader bf;

	/**
	 * Method that gets an ArrayList extrapolate the data from JobQueue.txt and
	 * return an ArrayList populated with <Job> Object of each Job
	 * @param ArrayList<Job>
	 * @return ArrayList<Job>
	 */
	public ArrayList<Job> readFile(ArrayList<Job> jobs){
		try{
			String name;
			int number = 1;
			bf = new BufferedReader(new FileReader("JobQueue.txt"));
			//while exsist a line on the document do this
			while((name = bf.readLine()) != null ){
				Job job = new Job();
				//Splitting the String with space character
				String[] splited = name.split("\\s+");
				//if Array of the line has more than 1 arguments
				if (splited.length > 1){
					job.setJob(number, splited[0], Integer.parseInt(splited[1]), Integer.parseInt(splited[2]));
					jobs.add(job);
					number++;
				}
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
		System.out.println("Data from the File has been loaded without any errors.");
		return jobs;
	}
}

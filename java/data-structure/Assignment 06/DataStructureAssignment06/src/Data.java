/**
 *
 * File:         Data.java
 * Purpose:      Save and get data from a file <supersenior.txt> to store all the info into a list and return it.
 * Project:      CSIS 3400 Assignment 06
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
	public ArrayList<Supersenior> readFile(ArrayList<Supersenior> superseniorsList){
		try{
			String line;
			String name = "";
			int numbTournaments = 0;
			double totalMoney;
			int number = 1;
			bf = new BufferedReader(new FileReader("supersenior.txt"));
			//while exsist a line on the document do this
			while((line = bf.readLine()) != null ){
				if (number == 1)
					name = line;
				else if (number == 2)
					numbTournaments = Integer.parseInt(line);
				else if (number == 3){
					totalMoney = Double.parseDouble(line);
					Supersenior supersenior = new Supersenior(name, numbTournaments, totalMoney);
					superseniorsList.add(supersenior);
					number = 0;
				}
				number++;
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
		return superseniorsList;
	}
}

/**
 *
 * File:         Data.java
 * Purpose:      Save and get data from a file <PalmBeachGolf.txt> to store all the info into a list and return it.
 * Project:      CSIS 3400 Assignment 08
 *
 * (c) Copyright Salvatore Mitrano 2014 All rights reserved.
 **/
import java.util.*;
import java.io.*;


public class Data {
	private BufferedReader bf;
	private String line;
	private String courseName = "";
	private String location = "";
	private double lowGreensFee = 0;
	private double highGreensFee = 0;
    private String designer = "";
    private int yearBuilt = 0;
    private int shortYards = 0;
    private int longYards = 0;
    private int par = 0;
	private int number = 0;

	/**
	 * Method that gets an ArrayList extrapolate the data from PalmBeachGolf.txt and
	 * return an ArrayList populated with <GolfCourse> Object of each GolfCourse
	 * @param ArrayList<GolfCourse>
	 * @return ArrayList<GolfCourse>
	 */
	public ArrayList<GolfCourse> readFile(ArrayList<GolfCourse> golfCourseList){
		try{	
			bf = new BufferedReader(new FileReader("PalmBeachGolf.txt"));
			//while exsist a line on the document do this
			while((line = bf.readLine()) != null ){
				if (number == 1)
					courseName = line;
				else if (number == 2)
					location = line;
				else if (number == 3)
					lowGreensFee = Double.parseDouble(line);
				else if (number == 4)
					highGreensFee = Double.parseDouble(line);
				else if (number == 5)
					designer = line;
				else if (number == 6)
					yearBuilt = Integer.parseInt(line);
				else if (number == 7)
					shortYards = Integer.parseInt(line);
				else if (number == 8)
					longYards = Integer.parseInt(line);
				else if (number == 9){
					par = Integer.parseInt(line);
					GolfCourse golfCourse = new GolfCourse(courseName, location, lowGreensFee, highGreensFee, 
							designer, yearBuilt, shortYards, longYards, par);
					golfCourseList.add(golfCourse);
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
		return golfCourseList;
	}
}

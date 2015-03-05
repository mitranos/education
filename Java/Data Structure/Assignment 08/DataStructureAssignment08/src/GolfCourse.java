/**
 *
 * File:         GolfCourse.java
 * Purpose:      Create a GolfCourse Class to store and retrieve data of a golf Courses.
 * Project:      CSIS 3400 Assignment 08
 *
 * (c) Copyright Salvatore Mitrano 2014 All rights reserved.
 **/
public class GolfCourse implements Comparable<GolfCourse> {
	private String courseName = "";
	private String location = "";
	private double lowGreensFee = 0;
	private double highGreensFee = 0;
	private String designer = "";
	private int yearBuilt = 0;
	private int shortYards = 0;
	private int longYards = 0;
	private int par = 0;

	/**
	 * 
	 * @param courseName
	 * @param location
	 * @param lowGreensFee
	 * @param highGreensFee
	 * @param designer
	 * @param yearBuilt
	 * @param shortYards
	 * @param longYards
	 * @param par
	 */
	GolfCourse(String courseName, String location, double lowGreensFee, double highGreensFee, 
			String designer, int yearBuilt, int shortYards, int longYards, int par){
		this.courseName = courseName;
		this.location = location;
		this.lowGreensFee = lowGreensFee;
		this.highGreensFee = highGreensFee;
		this.designer = designer;
		this.yearBuilt = yearBuilt;
		this.shortYards = shortYards;
		this.longYards = longYards;
		this.par = par;
	}

	/**
	 * Method to get Course Name
	 * @return
	 */
	public String getCourseName(){
		return courseName;
	}

	/**
	 * Method to get Course Location
	 * @return
	 */
	public String getCourseLocation(){
		return location;
	}

	/**
	 * Method to get the low Green Fee
	 * @return
	 */
	public double getLowGreenFee(){
		return lowGreensFee;
	} 

	/**
	 * Method to get the high Green Fee
	 * @return
	 */
	public double getHighGreenFee(){
		return highGreensFee;
	}

	/**
	 * Method to get Course Designer
	 * @return
	 */
	public String getDesigner(){
		return designer;
	}

	/**
	 * Method to get Course Year Built
	 * @return
	 */
	public int getYearBuilt(){
		return yearBuilt;
	}

	/**
	 * Method to get Course Short Yards
	 * @return
	 */
	public int getShortYards(){
		return shortYards;
	}

	/**
	 * Method to get Course Short Yards
	 * @return
	 */
	public int getLongYards(){
		return longYards;
	}

	/**
	 * Method to get Course Par
	 * @return
	 */
	public int getPar(){
		return par;
	}

	/**
	 * Comparable class method based on the LowGreenFee
	 */
	@Override
	public int compareTo(GolfCourse s1) {
		if (s1.getLowGreenFee() > getLowGreenFee())
			return -1;
		else if (s1.getLowGreenFee() < getLowGreenFee())
			return 1;
		return 0;
	}

	/**
	 * To String Method
	 */
	public String toString(){
		String toString = String.format("%-50s %-42s %-15s %-15s %n",
				getCourseName(),
				getDesigner(),
				getYearBuilt() == 0 ? "unknown" : getYearBuilt(),
						getLowGreenFee());
		return toString;
	}
}

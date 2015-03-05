/**
 *
 * File:         Supersenior.java
 * Purpose:      Create a Supersenior Class to store and retrieve data of a supersenior.
 * Project:      CSIS 3400 Assignment 06
 *
 * (c) Copyright Salvatore Mitrano 2014 All rights reserved.
 **/
public class Supersenior implements Comparable<Supersenior> {
	private String name;
	private int numbTournaments;
	private double totalMoney;
	private double average;
	
	/**
	 * Constructor
	 * @param name
	 * @param numbTournaments
	 * @param totalMoney
	 */
	Supersenior(String name, int numbTournaments, double totalMoney){
		this.name = name;
		this.numbTournaments = numbTournaments;
		this.totalMoney = totalMoney;
		this.average = totalMoney/numbTournaments;
	}
	
	/**
	 * Method to get name
	 * @return
	 */
	public String getName(){
		return name;
	}
	
	/**
	 * Method to get the tournaments Number
	 * @return
	 */
	public int getNumbTournaments(){
		return numbTournaments;
	} 
	
	/**
	 * Method to get the total tournaments money won
	 * @return
	 */
	public double getTotalMoney(){
		return totalMoney;
	}
	
	/**
	 * Method to get the Average of tournament money won
	 * @return
	 */
	public double getAverage(){
		return average;
	}
	
	/**
	 * Comparable class method based on the average
	 */
	@Override
	public int compareTo(Supersenior s1) {
		if (s1.getAverage() > getAverage())
			return -1;
		else if (s1.getAverage() < getAverage())
			return 1;
		return 0;
	}
}

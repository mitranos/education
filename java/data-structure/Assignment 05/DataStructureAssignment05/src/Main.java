/**
 *
 * File:         Main.java
 * Purpose:      Program to search a value trough an Array and to make multiplication a la russe.
 * Project:      CSIS 3400 Assignment 05
 * 
 * Company:      Nova Southeastern University
 * Supervisor:   Dr. Paul E. Kenison
 *
 * Author:       Salvatore Mitrano
 * History:      Created 2/15/2014
 * Assisted by:  none
 * References:   http://crypto.cs.mcgill.ca/~crepeau/CS250/2004/HW1.pdf
 *
 * (c) Copyright Salvatore Mitrano 2014 All rights reserved.
 **/
public class Main {

	/**
	 * @param args
	 */
	public static void main(String[] args) {
		// TODO Auto-generated method stub
		BinarySearch binSearch = new BinarySearch();
		MultiplicationRusse russe = new MultiplicationRusse();
		binSearch.binarySearch();
		russe.multiplicationRusse();
	}

}
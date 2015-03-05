/**
 *
 * File:         MyComparator.java
 * Purpose:      Create a MyComparator class to compare the priority of two Objects.
 * Project:      CSIS 3400 Assignment 04
 *
 * References: http://stackoverflow.com/questions/8990637/confused-how-to-type-comparator-in-another-class
 *
 * (c) Copyright Salvatore Mitrano 2014 All rights reserved.
 **/
import java.util.Comparator;

class MyComparator implements Comparator<Job> {

	/**
	 * Method that compare the priority of two <Job> object and return
	 * -1 if priority1 < priority 2
	 *  0 if priority1 = priority 2
	 *  1 if priority1 > priority 2
	 */
	public int compare(Job job1, Job job2) {
		if (job1.getPriority() < job2.getPriority())
			return -1;
		else if (job1.getPriority() > job2.getPriority())
			return 1;
		return 0;
	}
}
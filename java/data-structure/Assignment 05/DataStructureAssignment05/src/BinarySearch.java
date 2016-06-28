/**
 *
 * File:         BinarySearch.java
 * Purpose:      Class that make the Search Algorithm recursively and iteratively.
 * Project:      CSIS 3400 Assignment 05
 *
 * (c) Copyright Salvatore Mitrano 2014 All rights reserved.
 **/
import java.util.Random;
import java.util.Arrays;
import java.util.Scanner;

public class BinarySearch {
	private Random random = new Random();
	private Scanner scanner = new Scanner( System.in );

	private final static int MIN = 1;
	private final static int MAX = 32767;
	private final static int ARRAY_SIZE = 100;
	private int[] myArray = new int[ARRAY_SIZE];
	private char x;
	private int i;

	/**
	 * Public Method to call the binary search program
	 */
	public void binarySearch(){
		fillWithRandom();
		System.out.println("The first 5 values in the array were:" + myArray[0] + ", "+ myArray[1] + ", "+ myArray[2] + ", "+ myArray[3] + ", "+ myArray[4] );
		Arrays.sort(myArray);
		do{
			System.out.print("For what value do you want to search? ");
			i = scanner.nextInt();
			System.out.println("Your number was found on position(Recursively): " 
					+ binarySearchRecursive(myArray, i, 0, myArray.length-1 ));
			System.out.println("Your number was found on position(Iteratively): " 
					+ binarySearchIterative(myArray, i, 0, myArray.length-1 ));
			System.out.print("Would you like to search for another value? ");
			x = scanner.next().charAt(0);
		} while (x == 'y' || x == 'Y');
	}

	/**
	 * Method for Binary Search Recursively
	 * @param myArray
	 * @param value
	 * @param start
	 * @param end
	 * @return
	 */
	private int binarySearchRecursive(int[] myArray, int value, int start, int end ){
		int middle = (start + end)/2;
		if (start > end) 
			return -1;
		else if (myArray[middle] == value)
			return middle;
		else if (myArray[middle] < value)
			return binarySearchRecursive(myArray, value, middle+1, end);
		else
			return binarySearchRecursive(myArray, value, start, middle-1);
	}

	/**
	 * Method for Binary Search Iteratively
	 * @param myArray
	 * @param value
	 * @param start
	 * @param end
	 * @return
	 */
	private int binarySearchIterative(int[] myArray, int value, int start, int end ){
		while (end >= start)
		{
			int middle = (start + end)/2;
			if(myArray[middle] == value)
				return middle; 
			else if (myArray[middle] < value)
				start = middle + 1;
			else         
				end = middle - 1;
		}
		return -1;
	}

	/**
	 * Method to fill the array with random numbers
	 */
	private void fillWithRandom(){
		int i;
		for (i = 0; i < ARRAY_SIZE; i++)
			myArray[i] = random.nextInt(MAX - MIN + 1) + MIN;
	}

	/**
	 * Method to print the array
	 */
	private void printArray(){

		int i;
		for (i = 0; i < ARRAY_SIZE; i++)
			System.out.println(myArray[i]);
	}
}

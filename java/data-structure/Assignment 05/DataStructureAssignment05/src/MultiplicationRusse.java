/**
 *
 * File:         MultiplicationRusse.java
 * Purpose:      Class to make Multiplication a la russe iterative and recursive.
 * Project:      CSIS 3400 Assignment 05
 *
 * (c) Copyright Salvatore Mitrano 2014 All rights reserved.
 **/
import java.util.Scanner;

public class MultiplicationRusse {

	private Scanner scanner = new Scanner(System.in);

	/**
	 * Public Method to call the multiplication a la russe program
	 */
	public void multiplicationRusse(){
		System.out.print("What two numbers would you like to multiply using multiplication a la Rousse? ");
		int m = scanner.nextInt();
		int n = scanner.nextInt();
		printResultRecursive(m, n, multiplicationRusseRecursive(m, n));
		printResultIterative(m, n, multiplicationRusseIterative(m, n));
	}

	/**
	 * Multiplication a La Russe Recursively
	 * @param m
	 * @param n
	 * @return
	 */
	private int multiplicationRusseRecursive(int m, int n){
		if(n == 0)
			return 0;
		else if(n % 2 == 0)
			return multiplicationRusseRecursive(m + m, n / 2);
		else
			return (m + multiplicationRusseRecursive(m + m, (n - 1) / 2));
	}

	/**
	 * Multiplication a la russe Iteratively
	 * @param m
	 * @param n
	 * @return
	 */
	private int multiplicationRusseIterative(int m, int n){
		int product = 0;
		while (m >= 1){
			if(m % 2 == 0)
				n *= 2;
			else {
				product += n;
				n *= 2;
			}
			m /= 2;
		}
		return product;
	}

	/**
	 * Method to Print the result of multiplication a la russe recursive
	 * @param m
	 * @param n
	 * @param result
	 */
	private void printResultRecursive(int m, int n, int result){
		System.out.println("The product " + m + "*" + n + " = " + result + " using recursive multiplication a la Rousse");
	}

	/**
	 * Method to Print the result of multiplication a la russe iterative
	 * @param m
	 * @param n
	 * @param result
	 */
	private void printResultIterative(int m, int n, int result){
		System.out.println("The product " + m + "*" + n + " = " + result + " using iterative multiplication a la Rousse");
	}
}
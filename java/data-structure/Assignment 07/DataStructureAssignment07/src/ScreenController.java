/**
 *
 * File:         ScreenController.java
 * Purpose:      Print the screen and manage input.
 * Project:      CSIS 3400 Assignment 07
 *
 * (c) Copyright Salvatore Mitrano 2014 All rights reserved.
 **/
import java.util.*;

public class ScreenController {
	Scanner user_input = new Scanner( System.in );
	SortingProgram sortingprogram = new SortingProgram();
	
	/**
	 * Print the choices tab to the screen 
	 */
	
	private void printMenuTab() { 
		System.out.println("\n");
		System.out.println("\t1. Selection Sort");
		System.out.println("\t2. Merge Sort");
		System.out.println("\t3. Heap Sort");
		System.out.println("\t4. Shell Sort");
		System.out.println("\t5. Exit");
		System.out.println("\n");
	}

	/**
	 * Method with Switch statement to sort between the different choices
	 * @param iField : The User choice
	 */
	private void selectField(char iField){
		switch(iField){
		case '1':  sortingprogram.selectionSort();
		break;
		case '2':  sortingprogram.mergeSort();
		break;
		case '3':  sortingprogram.heapSort();
		break;
		case '4':  sortingprogram.shellSort();
		break;
		case '5': printGreetings();
		break;
		}
	}
	
	/**
	 * Methods to manage the user Input Choices 
	 */
	public void printMenu(){
		char x;
		do{
			printMenuTab();
			System.out.print("Enter a value: ");
			x = user_input.next().charAt(0);
			if(x >= '1' && x<= '5')
				selectField(x);
			else
				System.out.println("Wrong input, please enter a valid input");
		} while (x != '5');
	}
	
	/**
	 * Print Closure Message To the screen 
	 */
	private void printGreetings() {
		System.out.println("Thanks For Using my Program.\n(c) Copyright Salvatore Mitrano 2014. All rights reserved.");
	}
}

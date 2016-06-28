/**
 *
 * File:         ScreenController.java
 * Purpose:      Print the screen and manage input.
 * Project:      CSIS 3400 Assignment 03
 *
 * (c) Copyright Salvatore Mitrano 2014 All rights reserved.
 **/
import java.util.*;

public class ScreenController {
	Scanner user_input = new Scanner( System.in );
	Converter convert = new Converter();
	
	/**
	 * Print the choices tab to the screen 
	 */
	
	private void printMenuTab() { 
		System.out.println("This program allows the following conversion:\n");
		System.out.println("\t1. Prefix to Postfix");
		System.out.println("\t2. Prefix to Infix");
		System.out.println("\t3. Postfix to Prefix");
		System.out.println("\t4. Postfix to Infix");
		System.out.println("\t5. Infix to Prefix");
		System.out.println("\t6. Infix to Postfix");
		System.out.println("\t7. Exit");
		System.out.println("\n");
	}

	/**
	 * Method with Switch statement to sort between the different choices
	 * @param iField : The User choice
	 */
	private void selectField(char iField){
		switch(iField){
		case '1':  resultStatement(convert.prefixToInfixPostfix(1));
		break;
		case '2':  resultStatement(convert.prefixToInfixPostfix(0));
		break;
		case '3':  resultStatement(convert.postfixToInfixPrefix(1));
		break;
		case '4':  resultStatement(convert.postfixToInfixPrefix(0));
		break;
		case '5': resultStatement(convert.infixToPrefixPostfix(1));
		break;
		case '6': resultStatement(convert.infixToPrefixPostfix(0));
		break;
		case '7': printGreetings();
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
			if(x >= '1' && x<= '7')
				selectField(x);
			else
				System.out.println("Wrong input, please enter a valid input");
		} while (x != '7');
	}
	
	/**
	 * Print the converted expression to the screen 
	 */
	private void resultStatement(String expression){
		System.out.println("Your Result is: " + expression);
	}
	
	/**
	 * Print Closure Message To the screen 
	 */
	private void printGreetings() {
		System.out.println("Thanks For Using my Program.\n(c) Copyright Salvatore Mitrano 2013. All rights reserved.");
	}
}

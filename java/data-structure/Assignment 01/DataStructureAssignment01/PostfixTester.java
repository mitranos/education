/**
 *
 * File:         PostfixTester.java
 * Purpose:      Evaluate a Postfix Expression and handle the possible exceptions.
 * Project:      CSIS 3400 Assignment 01
 *
 * Company:      Nova Southeastern University
 * Supervisor:   Dr. Paul E. Kenison
 *
 * Author:       Salvatore Mitrano
 * History:      Created 1/10/2014
 * Assisted by:  none
 * References:   http://stackoverflow.com/questions/789847/postfix-notation-validation
 *
 * (c) Copyright Salvatore Mitrano 2013 All rights reserved.
 **/
import java.util.Scanner;

/**
 * Demonstrates the use of a stack to evaluate postfix expressions.
 *
 * @author Lewis and Chase
 * @version 4.0
 */
public class PostfixTester    
{
	/**
	 * Reads and evaluates multiple postfix expressions.
	 */
	public static void main(String[] args)
	{
		String expression, again;
		int result;

		Scanner in = new Scanner(System.in);

		do
		{  
			PostfixEvaluator evaluator = new PostfixEvaluator();
			System.out.println("Enter a valid post-fix expression one token " +
					"at a time with a space between each token (e.g. 5 4 + 3 2 1 - + *)");
			System.out.println("Each token must be an integer or an operator (+,-,*,/,%,$)");
			expression = in.nextLine();

			result = evaluator.evaluate(expression);
			System.out.println();
			System.out.println("That expression equals " + result);

			System.out.print("Evaluate another expression [Y/N]? ");
			again = in.nextLine();
			System.out.println();
		}
		while (again.equalsIgnoreCase("y"));
	}
}

/**
 *
 * File:         PostfixEvaluator.java
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
 * (c) Copyright Salvatore Mitrano 2014 All rights reserved.
 **/
import java.util.Stack;
import java.util.Scanner;
import java.lang.Math;
import jsjf.exceptions.*;

/**
 * Represents an integer evaluator of postfix expressions. Assumes 
 * the operands are constants.
 *
 * @author Lewis and Chase
 * @version 4.0
 */
public class PostfixEvaluator
{
	private final static char ADD = '+';
	private final static char SUBTRACT = '-';
	private final static char MULTIPLY = '*';
	private final static char DIVIDE = '/';
	private final static char REMAINDER = '%';
	private final static char EXPONENT = '$';

	private Stack<Integer> stack;

	/**
	 * Sets up this evalutor by creating a new stack.
	 */
	public PostfixEvaluator()
	{
		stack = new Stack<Integer>();
	}

	/**
	 * Evaluates the specified postfix expression. If an operand is
	 * encountered, it is pushed onto the stack. If an operator is
	 * encountered, two operands are popped, the operation is
	 * evaluated, and the result is pushed onto the stack.
	 * @param expr string representation of a postfix expression
	 * @return value of the given expression
	 */
	public int evaluate(String expr) //throws EmptyCollectionException
	{
		int op1, op2, result = 0;
		String token;
		Scanner parser = new Scanner(expr);
		Scanner errorParser = new Scanner(expr);

		handleExceptions(errorParser);

		while (parser.hasNext())
		{
			token = parser.next();
			if (isOperator(token))
			{
				op2 = (stack.pop()).intValue();
				op1 = (stack.pop()).intValue();
				result = evaluateSingleOperator(token.charAt(0), op1, op2);
				stack.push(new Integer(result));
			}
			else
				stack.push(new Integer(Integer.parseInt(token)));
		}

		return result;
	}

	/**
	 * Determines if the specified token is an operator.
	 * @param token the token to be evaluated 
	 * @return true if token is operator
	 */
	private boolean isOperator(String token)
	{
		return ( token.equals("+") || token.equals("-") ||
				token.equals("*") || token.equals("/") ||
				token.equals("%") || token.equals("$") );
	}

	/**
	 * Peforms integer evaluation on a single expression consisting of 
	 * the specified operator and operands.
	 * @param operation operation to be performed
	 * @param op1 the first operand
	 * @param op2 the second operand
	 * @return value of the expression
	 */
	private int evaluateSingleOperator(char operation, int op1, int op2)
	{
		int result = 0;

		switch (operation)
		{
		case ADD:
			result = op1 + op2;
			break;
		case SUBTRACT:
			result = op1 - op2;
			break;
		case MULTIPLY:
			result = op1 * op2;
			break;
		case DIVIDE:
			result = op1 / op2;
			break;
		case REMAINDER:
			result = op1 % op2;
			break;
		case EXPONENT:
			result = (int)Math.pow(op1, op2);
		}
		return result;
	}

	/**
	 * It checks if the Postifix expression has any error.
	 * If so,  this method throw an exception.
	 * @param parser 
	 */

	private void handleExceptions(Scanner parser) throws EmptyCollectionException
	{
		int counter = 0;
		String token;
		
		while(parser.hasNext()){
			token = parser.next();
			if (!isOperator(token))
				counter++;
			else
				counter--;
			if (counter <= 0)
				throw new InvalidPostfixException();
		}		
	}
}

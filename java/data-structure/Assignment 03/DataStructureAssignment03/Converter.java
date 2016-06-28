/**
 *
 * File:         Converter.java
 * Purpose:      Print the screen and manage input.
 * Project:      CSIS 3400 Assignment 03
 *
 * (c) Copyright Salvatore Mitrano 2014 All rights reserved.
 **/
import java.util.Scanner;
import jss2.*;

public class Converter {

	private String expression;
	private Scanner in = new Scanner(System.in);
	private LinkedStack<String> stack = new LinkedStack<String>();
	private LinkedStack<String> operandStack = new LinkedStack<String>();
	private LinkedStack<String> operatorStack = new LinkedStack<String>();


	/**
	 * Method to convert an expression from postfix to infix and prefix
	 * @param val : 0 conversion to infix, 1 conversion to prefix
	 * @return String converted expression
	 */
	public String postfixToInfixPrefix(int val) {
		String token,x, y, result;

		expression = readString("Postfix");

		Scanner parser = new Scanner(expression);

		stack.emptyStack();

		while (parser.hasNext())
		{
			token = parser.next();
			if (!isOperator(token))
				stack.push(token);
			else {
				x = (stack.pop());
				y = (stack.pop());
				if (val == 0)
					result = '(' + y + token + x + ')';
				else
					result = token + y + x;
				stack.push(result);
			}
		}
		return stack.pop();
	}

	/**
	 * Method to convert an expression from prefix to infix and postfix
	 * @param val: 0 conversion to infix, 1 conversion to postfix
	 * @return String converted expression
	 */
	public String prefixToInfixPostfix(int val) {
		String token,x, y, result;

		expression = readString("Prefix");

		Scanner parser = new Scanner(expression);

		operandStack.emptyStack();
		operatorStack.emptyStack();

		do
		{
			token = parser.next();
			if (isOperator(token)){
				stack.push(token);
			} else {
				if (!isOperator(stack.peek())){
					do{
						x = (stack.pop());
						y = (stack.pop());
						if (val == 0)
							result = '(' + x + y + token + ')';
						else
							result = x + token + y;
						token = result;
					}while(!stack.isEmpty() && !isOperator(stack.peek()));
				}
				stack.push(token);
			}
		}while (parser.hasNext());
		return stack.pop();
	}

	/**
	 * Method to convert an expression from infix to prefix and postfix
	 * @param val: 0 conversion to postfix, 1 conversion to prefix
	 * @return String converted expression
	 */
	public String infixToPrefixPostfix(int val) {
		String token,x, y, z, result;

		expression = readString("Infix");

		Scanner parser = new Scanner(expression);

		stack.emptyStack();

		do
		{
			token = parser.next();
			if (!isOperator(token)){
				operandStack.push(token);
			} else {
				if (operatorStack.isEmpty()){
					operatorStack.push(token);
				} else {
					if(precedence(operatorStack.peek().charAt(0)) >= precedence(token.charAt(0))){
						do{
							x = (operandStack.pop());
							y = (operandStack.pop());
							z = (operatorStack.pop());
							if (val == 0)
								result = y + x + z;
							else
								result = z + y + x;
							operandStack.push(result);
						}while(!operatorStack.isEmpty() && !(precedence(operatorStack.peek().charAt(0)) < precedence(token.charAt(0))));
					}
					operatorStack.push(token);
				}
			}
		}while (parser.hasNext());

		do{
			x = (operandStack.pop());
			y = (operandStack.pop());
			z = (operatorStack.pop());
			if (val == 0)
				result = y + x + z;
			else
				result = z + y + x;
			operandStack.push(result);
		}while(!operatorStack.isEmpty());
		return operandStack.pop();
	}

	/**
	 * Method to ask the user to input the expression
	 * @param operation String with the name of the operation: Infix, PostFix, Prefix
	 * @return String : The user imputed string
	 */
	private String readString(String operation){

		System.out.println("Enter a valid "+ operation + " expression one token " +
				"at a time with a space between each token ");
		System.out.println("Each token must be an character or an operator (+,-,*,/,%,$)");
		String expression = in.nextLine();
		return expression;
	}

	/**
	 * Method to check if the token is an operator.
	 * @param token
	 * @return true if is an operator
	 */
	private boolean isOperator(String token)
	{
		return ( token.equals("+") || token.equals("-") ||
				token.equals("*") || token.equals("/") ||
				token.equals("%") || token.equals("$") );
	}

	/**
	 * Method to sort the precedence of each operator.
	 * @param operator 
	 * @return int value between 1 - 6 with the operator priority
	 */
	private int precedence(char operator) {
		int pre = 0;
		switch(operator){
		case '+': pre = 1;
		break;
		case '-': pre = 1;
		break;
		case '*': pre = 2;
		break;
		case '/': pre = 2;
		break;
		case '%': pre = 2;
		break;
		case '$': pre = 3;
		break;
		}
		return pre;
	}

}

package jsjf.exceptions;

public class InvalidPostfixException  extends RuntimeException {
	/**
	 * Sets up this exception with an appropriate message.
	 * @param collection the name of the collection
	 */
	public InvalidPostfixException()
	{
		super("The Postfix Expression is Invalid.(This is an example of a Postfix Expression: 5 9 2 * + )");
	}
}
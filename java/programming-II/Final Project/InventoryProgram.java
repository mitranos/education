
public class InventoryProgram
{
	// main method begins execution of Java application
	public static void main( String args[] )
	{	
		// create a Program object
		Program program = new Program();

		// Show Program Welcome Message
		System.out.println( );																// Show an Empty Line
		System.out.println( );																// Show an Empty Line
		System.out.println( "Welcome to the Book Inventory Program!!!");		// Show Welcome Message
		System.out.println( );																// Show an Empty Line

		//Asking the user to add books information
		//program.addData();

		// Sort the book inventory
		//program.sortInventory();

		//System.out.println( );		// Show an Empty Line
		//System.out.println( );		// Show an Empty Line


		//program.diplayData();

		program.printMenu();


		// Show Program Exit Message
		System.out.println( );																// Show an Empty Line
		System.out.println( );																// Show an Empty Line
		System.out.println( "Now exiting the Book Inventory Program." );		// Show Exit Message
		System.out.println( );																// Show an Empty Line
		System.out.println( );																// Show an Empty Line

	} // end method main

} // end InventoryProgram class

import java.util.Scanner; 					// Program uses class Scanner to accept user input
import java.text.NumberFormat;              	// Program Uses Class NumberFormat to format number output
import java.util.Locale;						// Program Needs to Use U.S. Currency


public class Program extends InventoryProgram{
	// create Scanner to obtain input from command window
	Scanner input = new Scanner( System.in );

	// Establish a book inventory object to store multiple books
	protected BookInventory myBookInventory = new BookInventory();

	//Create a Data object to save the inventory on a file
	Data data = new Data();

	public void addData(){
		// Set Currency to U.S. Dollars
		NumberFormat currency = NumberFormat.getCurrencyInstance(Locale.US);

		// Placeholder for whether another book needs to be entered
		String addAnotherBook = "y";

		while(addAnotherBook.compareToIgnoreCase("y") == 0)
		{

			// Create a new book object with no user-defined parameters
			Book myBook = new Book();

			// Show an Empty Line
			System.out.println( );

			// Prompt for Book Name
			System.out.print( "Enter the Book Title: " ); 			// prompt message
			myBook.setName(input.nextLine()); 				// read the book name

			// Prompt for Book Author
			System.out.print( "Enter the Book Author: " ); 			// prompt message
			myBook.setAuthor(input.nextLine()); 				// read the book ID

			// Prompt for Book ISBN
			System.out.print( "Enter the Book ISBN: " ); 			// prompt message
			myBook.setID(input.nextLine()); 				// read the book ID

			// Prompt for Book's Unit Price
			System.out.print( "Enter the Book's Unit Price ($): " ); 	// prompt message
			myBook.setUnitPrice(input.nextFloat()); 			// read the book's unit price

			// Prompt for Book's Stock Inventory
			System.out.print( "Enter the Number of Books in Stock: " ); 	// prompt message
			myBook.setUnitsInStock(input.nextLong());			// read the number of book units in stock

			input.nextLine();           // Need this to clear out number input queue

			// Add the book to the book inventory
			myBookInventory.addProduct(myBook);

			System.out.println( );      // Show an empty line

			// Prompt for whether another
			System.out.print( "Do You Wish to Enter Another Book (y/n)? " ); 	// prompt message
			addAnotherBook = input.nextLine().substring(0, 1);                  // Read user's response (i.e., yes or no)


		} // end while loop

	}

	// Sort the book inventory
	public void sortInventory(){
		myBookInventory.sort();
	}

	//Print on the screen the tab of things to do
	private void printMenuTab() {
		System.out.println("\n");
		System.out.println("\ta. Enter More Books");
		System.out.println("\tb. Display Book Inventory");
		System.out.println("\tc. Delete a Book from Inventory");
		System.out.println("\td. Save Printable Format");
		System.out.println("\te. Save Data");
		System.out.println("\tf. Load Data");
		System.out.println("\tg. Exit");
		System.out.println("\n");
	}

	//Switch statement for the tab information
	private void selectField(int iField){
		switch(iField){
		case 'a': addData();
		break;
		case 'b':  diplayData();
		break;
		case 'c':  deleteBook();
		break;
		case 'd':  data.savePrintableFormat(myBookInventory);
		break;
		case 'e':  data.saveFile(myBookInventory);
		break;
		case 'f':  myBookInventory = data.readFile(myBookInventory);
		break;
		case 'g':  ;
		break;
		}
	}

	//Main loop to iterate the menu information
	public void printMenu(){
		char x;
		do{
			printMenuTab();
			System.out.print("Enter a value: ");
			x = input.next().charAt(0);
			// clear scanner buffer
			input.nextLine();
			if(x >= 'a' && x<= 'g')
				selectField(x);
			else
				System.out.println("Wrong input, please enter a valid input");
		} while (x != 'g');
	}

	//Method to display all the books information
	public void diplayData(){
		if(myBookInventory.isEmpty()){
			System.out.print("There are no Books in your Inventory!");
		}else{
			System.out.println( "**** PRODUCT INFORMATION ****" );
			System.out.format("%-3s%-25s%-20s%-15s%-8s%-8s", "n", "Title", "Author", "ISBN", "Price", "Unit");
			System.out.println();
			for(int i = 0; i < myBookInventory.size(); i++){
				int index = i+1;
				String title = myBookInventory.getProduct(i).getName();				// get book title
				String author = myBookInventory.getProduct(i).getAuthor();			// get book author
				String ISBN = myBookInventory.getProduct(i).getISBN();				// get book ISBN
				float price = myBookInventory.getProduct(i).getUnitPrice();			// get book Unit Price
				long inStock = myBookInventory.getProduct(i).getUnitsInStock();		// get book in stock
				System.out.format("%-3s%-25s%-20s%-15s%-8s%-8s",index , title, author, ISBN, price, inStock); // print everything in a nice format
				System.out.println();
				//printing book each 10 Rows
				if((index % 10) == 0){
					pauseProg();
					if(i < myBookInventory.size()){
						System.out.format("%-3s%-25s%-20s%-15s%-8s%-8s", "n", "Title", "Author", "ISBN", "Price", "Unit");
						System.out.println();
					}
				}
			}
		}		
	}

	//Method to pause the progression of the program
	private void pauseProg(){
		System.out.println("Press enter to continue...");
		input.nextLine();
	}


	//Delete a book from the inventory
	public void deleteBook(){
		if(myBookInventory.isEmpty()){
			System.out.print("There is nothing to delete!");
		}else{
			diplayData();
			do{
				System.out.print("Which one do you want do delete: ");
				String  s = input.next();
				if (isInteger(s)) {
					int x = Integer.parseInt(s);
					int listSize = myBookInventory.size();
					if (x > 0 && x<= listSize) {
						myBookInventory.deleteProduct(--x);
						System.out.println("Book delected successfully.");
						break;
					}else{
						System.out.print("Wrong Input.It is not in the Book range.");
					}
				} else {
					System.out.print("Wrong Input.It is not a number.");
				}
			}while(true);
		}
	}


	public boolean isInteger( String input )  
	{  
		try {  
			Integer.parseInt( input );  
			return true;  
		} catch( Exception e) {  
			return false;  
		}  
	}  
}

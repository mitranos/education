/*
 *
 * Inventory Program - Book Class
 *
 * 
 * 
 */


// Book Class Inherits from the Product Class
public class Book extends Product
{


	protected String bookAuthor;            // Variable that stores the name of the book publisher
	private float restockingFeePercent = 5;		// Re-stocking fee in percent --> Default is 5%



	// Constructor for a product that is not specified
	Book()
	{

		super.setName("UNKNOWN");
		super.setID("UNKNOWN");
		super.setUnitPrice(0);
		super.setUnitsInStock(0);
		setAuthor("UNKNOWN");

	}


	// Constructor for a product with a supplied name
	Book(String pBookName)
	{

		super.setName(pBookName);
		super.setID("UNKNOWN");
		super.setUnitPrice(0);
		super.setUnitsInStock(0);
		setAuthor("UNKNOWN");

	}


	// Constructor for a product with a supplied name and ID/number
	Book(String pBookName, String pBookISBN)
	{

		super.setName(pBookName);
		super.setID(pBookISBN);
		super.setUnitPrice(0);
		super.setUnitsInStock(0);
		setAuthor("UNKNOWN");

	}


	// Constructor for a product with a supplied name, ID/number, and unit price
	Book(String pBookName, String pBookISBN, String pBookAuthor)
	{

		super.setName(pBookName);
		super.setID(pBookISBN);
		super.setUnitPrice(0);
		super.setUnitsInStock(0);
		setAuthor(pBookAuthor);

	}


	// Constructor for a product with a supplied name, ID/number, and unit price
	Book(String pBookName, String pBookISBN, String pBookAuthor, float pUnitPrice)
	{

		super.setName(pBookName);
		super.setID(pBookISBN);
		super.setUnitPrice(pUnitPrice);
		super.setUnitsInStock(0);
		setAuthor(pBookAuthor);

	}


	// Constructor for a product with a supplied name, ID/number, unit price, and number of units in stock
	Book(String pBookName, String pBookISBN, String pBookAuthor, float pUnitPrice, long pUnitsInStock)
	{


		super.setName(pBookName);
		super.setID(pBookISBN);
		super.setUnitPrice(pUnitPrice);
		super.setUnitsInStock(pUnitsInStock);
		setAuthor(pBookAuthor);

	}


	// Method sets the dimensions of the Book set
	public void setAuthor(String pBookAuthor)
	{


		bookAuthor = pBookAuthor;

	}



	// Method returns the type of Book set (i.e., LCD, Plasma, Tube, DLP, etc.)
	public String getISBN()
	{


		return super.getID();  // Return the Book ISBN/ID



	}

	// Method returns the type of Book set (i.e., Sony, Samsung, LG, etc.)
	public String getAuthor()
	{

		return bookAuthor;  // Return the Book type

	}


	// Method returns the restocking fee of the Book
	public float getRestockingFee()
	{


		// Return the restocking fee for the book
		return ( (float) super.unitPrice * (restockingFeePercent/100) );

	}


} // end Book class

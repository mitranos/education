public class Product implements Comparable<Object>
{


	protected String productName;		// Variable that stores the product name
	protected String productID;     	// Variable that stores the product ID/number
	protected long unitsInStock;		// Variable that stores the number of product units in stock
	protected float unitPrice;      	// Variable that stores the unit price of the product


	// Constructor for a product that is not specified
	Product()
	{

		setName("UNKNOWN");
		setID("UNKNOWN");
		setUnitPrice(0);
		setUnitsInStock(0);

	}


	// Constructor for a product with a supplied name
	Product(String pProductName)
	{

		setName(pProductName);
		setID("UNKNOWN");
		setUnitPrice(0);
		setUnitsInStock(0);

	}


	// Constructor for a product with a supplied name and ID/number	
	Product(String pProductName, String pProductID)
	{

		setName(pProductName);
		setID(pProductID);
		setUnitPrice(0);
		setUnitsInStock(0);

	}


	// Constructor for a product with a supplied name, ID/number, and unit price
	Product(String pProductName, String pProductID, float pUnitPrice)
	{

		setName(pProductName);
		setID(pProductID);
		setUnitPrice(pUnitPrice);
		setUnitsInStock(0);

	}


	// Constructor for a product with a supplied name, ID/number, unit price, and number of units in stock
	Product(String pProductName, String pProductID, float pUnitPrice, long pUnitsInStock)
	{

		setName(pProductName);
		setID(pProductID);
		setUnitPrice(pUnitPrice);
		setUnitsInStock(pUnitsInStock);

	}


	// This method is required to sort product objects in an 
	// array based on the product name
	public int compareTo(Object pAnotherProduct) throws ClassCastException
	{

		// If the supplied object is not a product type,
		// an exception is thrown by the program
		if (!(pAnotherProduct instanceof Product))
			throw new ClassCastException("A Product object was expected.");

		return (productName.compareToIgnoreCase( ( (Product) pAnotherProduct).getName() ) );


	}


	// Method that sets the name of the product
	public void setName (String pProductName)
	{

		productName = pProductName;	// Set the name of the product

	}


	// Method that sets the ID/number of the product
	public void setID (String pProductID)
	{


		productID = pProductID;	// Set the product ID/number

	}


	// Method that sets the unit price of the product
	public void setUnitPrice (float pUnitPrice)
	{

		// Check to see if a positive value is provided
		if (pUnitPrice > 0)
		{

			unitPrice = pUnitPrice;	// Set the product's unit price

		} else {

			unitPrice = 0;				// Set the product's unit price to zero

		}


	}


	// Method that sets the number of product units in stock
	public void setUnitsInStock (long pUnitsInStock)
	{


		// Check to see if a positive value is provided
		if (pUnitsInStock > 0)
		{

			unitsInStock = pUnitsInStock;	// Set the number of product units in stock

		} else {

			unitsInStock = 0;				// Set the number of product units in stock to zero

		}

	}


	// Method that retrieves the name of the product
	public String getName()
	{

		return productName;	// Return the product name

	}


	// Method that retrieves the product ID/number
	public String getID()
	{


		return productID;		// Return the product ID/number

	}


	// Method that retrieve the number of product units in stock
	public long getUnitsInStock()
	{


		return unitsInStock;	// Return number of units in stock

	}


	// Method that retrieves the unit price of the product
	public float getUnitPrice()
	{

		return unitPrice;	// Return product unit price

	}


	// Method computes and returns the total inventory value of the product
	public float getTotalValue()
	{

		return ( (float)unitsInStock * unitPrice );  // Return total product value

	}


} // end Product class
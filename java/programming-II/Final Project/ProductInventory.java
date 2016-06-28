import java.util.ArrayList;
import java.util.Collections;
import java.util.Iterator;


public class ProductInventory
{


	// Define the Product Inventory Array List
	protected ArrayList<Product> myProductInventory;


	// Constructor used to initialize class parameters
	ProductInventory()
	{

		// Initialize the Product Inventory Array List
		myProductInventory = new ArrayList<Product>();

	}


	// Constructor that Accepts a Product and Places
	// it into the Inventory Array
	ProductInventory(Product pProduct)
	{

		// Initialize the Product Inventory Array List
		myProductInventory = new ArrayList<Product>();

		// Add a user-defined Product to the inventory array
		// This Product object is placed in the first position
		// of the Product Inventory Array List
		this.addProduct(pProduct);

	}


	// Method that Computes the Overall Value of a Product Inventory Array
	public float getTotalValue()
	{


		// Placeholder for the overall inventory value
		float totalInventoryValue = 0;

		for (Iterator it = myProductInventory.iterator(); it.hasNext(); )
		{

			try
			{

				// Get product from the product inventory array list
				Product currentProduct = (Product)it.next();

				// Add the total value of a Product to the overall Product inventory value
				totalInventoryValue = totalInventoryValue + (float)currentProduct.getTotalValue();

			}
			catch (Exception e)
			{

				System.out.println( e );	// Output the exception message to the display

			}

		}

		// Return the overall Product inventory value for the supplied Product inventory array list
		return totalInventoryValue;


	} // end getTotalInventoryValue method


	// Method that Sorts a Product Inventory Based on the Product Name
	public void sort()
	{


		// Sort the Product Inventory Array List (by Product Name)
		Collections.sort(myProductInventory);




	}


	public void addProduct(Product pProduct)
	{



		// Add the new product to the product inventory array list
		myProductInventory.add(pProduct);


	}


	// Method that deletes a Product from the inventory
	public void deleteProduct(int pProductIndex)
	{

		// Check to See if the Inventory Array is Empty or Not
		if ( pProductIndex >= 0 && pProductIndex < myProductInventory.size() )
		{

			// Delete/Remove the product at the index designated by the
			// pProductIndex parameter from the product inventory array list
			myProductInventory.remove(pProductIndex);

		}

	}


	// Method that Retrieves a Product from the Inventory
	public Product getProduct(int pProductIndex)
	{

		// Check to see if a proper array index value was provided
		if ( pProductIndex >= 0 && pProductIndex < getSize() )
		{

			// Return the Product from the array at the specified position
			return myProductInventory.get(pProductIndex);

		} else {

			// If the provided array position is invalid,
			// return a null value as the Product
			return null;

		}

	}


	// Method that Retrieves the Number of Products in the Inventory Array
	public int getSize()
	{

		// Return the number of Products in the inventory
		return myProductInventory.size();

	}



	// Method checks to see if there are any products in the inventory
	public Boolean isEmpty()
	{


		if (getSize() == 0)
		{

			return true;

		}
		else
		{

			return false;

		}


	}    


}	// end ProductInventory class solution


// BookInventory Class Inherits from the ProductInventory Class
public class BookInventory extends ProductInventory
{


	// Constructor with no passed parameters    
	BookInventory()
	{

		// NULL --> Nothing to see here

	}


	// Constructor that Accepts a Book and Places it into the Inventory Array
	BookInventory(Book pBook)
	{


		// Add a user-defined Book to the inventory array
		// This Book object is placed in position 1 in the array
		super.addProduct(pBook);


	}	


	// Method that Retrieves a Book from the Inventory
	// This method overrides the version in the ProductInventory class
	@Override
	public Book getProduct(int pBookIndex)
	{

		// Check to see if a proper array index value was provided
		if ( pBookIndex >= 0 && pBookIndex < super.getSize() )
		{

			// Return the Book from the array at the specified position
			// Must cast the object retrieved from the product array as a Book
			return (Book) super.myProductInventory.get(pBookIndex);

		}
		else
		{

			// If the provided array position is invalid,
			// return a null value as the Book
			return null;

		}

	}

	public int size(){
		return super.getSize();
	}


}	// end BookInventory class

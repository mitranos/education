/**
 *
 * File:         Data.java
 * Purpose:      Save and get data from a file <data.dat> to store all the info of a list.
 * Project:      CSIS 3100 Assignment 03
 *
 * (c) Copyright Salvatore Mitrano 2013 All rights reserved.
 **/
import java.util.*;
import java.io.*;


public class Data {

	private PrintWriter pwOutput;
	private File file = new File("BookInventory.dat");
	private File filePrintableFormat = new File("PrintableFormat.docx");
	private BufferedReader bf;
	private String printableFormat = null;

	public void saveFile(BookInventory myBookInventory){
		if(myBookInventory.isEmpty()){
			System.out.print("There is nothing to Save!");
		}else{
			try {
				pwOutput = new PrintWriter(file);

				for (int i = 0; i < myBookInventory.size(); i++){
					String title = myBookInventory.getProduct(i).getName();				// get book title
					String author = myBookInventory.getProduct(i).getAuthor();			// get book author
					String ISBN = myBookInventory.getProduct(i).getISBN();				// get book ISBN
					float price = myBookInventory.getProduct(i).getUnitPrice();			// get book Unit Price
					long inStock = myBookInventory.getProduct(i).getUnitsInStock();		// get book in stock
					pwOutput.println(title + "\t" + author + "\t" + ISBN + "\t" + price + "\t" + inStock);
				}
				pwOutput.close();
			}catch (Exception e ){
				e.printStackTrace();
			}
			System.out.print("The File has been saved.");
		}
	}

	public void savePrintableFormat(BookInventory myBookInventory){
		if(myBookInventory.isEmpty()){
			System.out.print("There is nothing to Save!");
		}else{
			try {
				pwOutput = new PrintWriter(filePrintableFormat);

				String placeholder = "";
				printableFormat = placeholder.format("%-3s%-25s%-20s%-15s%-8s%-8s", "n", "Title", "Author", "ISBN", "Price", "Unit");
				for (int i = 0; i < myBookInventory.size(); i++){
					int index = i+1;
					String title = myBookInventory.getProduct(i).getName();				// get book title
					String author = myBookInventory.getProduct(i).getAuthor();			// get book author
					String ISBN = myBookInventory.getProduct(i).getISBN();				// get book ISBN
					float price = myBookInventory.getProduct(i).getUnitPrice();			// get book Unit Price
					long inStock = myBookInventory.getProduct(i).getUnitsInStock();		// get book in stock
					printableFormat += "\n";
					printableFormat += printableFormat.format("%-3s%-25s%-20s%-15s%-8s%-8s",index , title, author, ISBN, price, inStock);
					if((index % 20) == 0){
						if(i < myBookInventory.size()){
							printableFormat += "\f";
							printableFormat += printableFormat.format("%-3s%-25s%-20s%-15s%-8s%-8s", "n", "Title", "Author", "ISBN", "Price", "Unit");
							//printableFormat += "\n";
						}
					}
				}
				pwOutput.println(printableFormat);
				pwOutput.close();
			}catch (Exception e ){
				e.printStackTrace();
			}
			System.out.print("The File has been saved.");
		}
	}


	public BookInventory readFile(BookInventory myBookInventory){
		try{
			String line;
			bf = new BufferedReader(new FileReader("BookInventory.dat"));
			while((line = bf.readLine()) != null ){
				Book myBook = new Book();
				String delims = "\\t";
				String[] tokens = line.split(delims);
				myBook.setName(tokens[0]); 				// read the book name
				myBook.setAuthor(tokens[1]); 				// read the book ID
				myBook.setID(tokens[2]); 				// read the book ID
				myBook.setUnitPrice(Float.parseFloat(tokens[3])); 			// read the book's unit price
				myBook.setUnitsInStock(Long.parseLong(tokens[4]));			// read the number of book units in stock
				myBookInventory.addProduct(myBook);
			}
		} catch (Exception e) {
			e.printStackTrace();
		} finally {
			try {
				bf.close();
			} catch (Exception e) {
				e.printStackTrace();
			}	
		}
		System.out.print("Data from the File has been loaded.");
		return myBookInventory;
	}
}

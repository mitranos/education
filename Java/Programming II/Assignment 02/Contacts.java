/**
 *
 * File:         Contact.java
 * Purpose:      Create a LIST of Contacts to store data.
 * Project:      CSIS 3100 Assignment 02
 *
 * (c) Copyright Salvatore Mitrano 2013 All rights reserved.
 **/
import java.util.*;

public class Contacts {
	final static int MAX_LIST_SIZE = 3;

	Scanner user_input = new Scanner( System.in );
	Contact contact = new Contact();

	ArrayList<Contact> contactsList = new ArrayList<Contact>();

	private void addToContactList(Contact contact){
		contactsList.add(contact);
	}

	public void printContact(){
		if(contactsList.isEmpty()){
			System.out.print("\nThere are no contacts to Show! Add some one's!");
		} else {
			System.out.printf("%2s %-15s %-15s %-15s %-15s %-15s %-15s %-15s %-15s%n", "n", "First Name", "Last Name", "Address", "City", "State", "Zip Code", "Phone Number", "Email");
			for (int i = 0; i < contactsList.size(); i++){
				contact = contactsList.get(i);
				contact.printContact(i);
			}
		}
	}

	private Contact getInfo(Contact contact){
		System.out.print("First Name: ");
		String first = user_input.next();
		System.out.print("Last Name: ");
		String last = user_input.next();
		System.out.print("Street: ");
		String street = user_input.next();
		System.out.print("City: ");
		String city = user_input.next();
		System.out.print("State: ");
		String state = user_input.next();
		System.out.print("Zip Code: ");
		String zip = user_input.next();
		System.out.print("Phone Number: ");
		String phone = user_input.next();
		System.out.print("Email address: ");
		String email = user_input.next();

		contact.addContact( first, last, street, city, state, zip, phone, email);
		return contact;
	}

	public void addContact(){
		Contact contact = new Contact();
		if(contactsList.size() < MAX_LIST_SIZE){
			System.out.println("Add the folowing info:");
			contact = getInfo(contact);
			addToContactList(contact);
		}else {
			System.out.println("\nYou reached the maximum number of contact possible!");
		}
	}

	public void deleteContact(){
		if(contactsList.isEmpty()){
			System.out.print("\nThere are no contacts to delete! Add some one's!");
		} else {
			printContact();
			System.out.print("\nEnter the user number you want to delete: ");
			int x = user_input.nextInt();
			contactsList.remove(x);
			System.out.print("\nUser Deleted successfully.");
		}
	}

	public void editContact(){
		if(contactsList.isEmpty()){
			System.out.print("\nThere are no contacts to edit! Add some one's!");
		} else {
			printContact();
			do{
				System.out.print("\nEnter the user number you want to edit: ");
				String  s = user_input.next();
				if (isInteger(s)) {
					int x = Integer.parseInt(s);
					int listSize = contactsList.size();
					if (x >= 0 && x <= MAX_LIST_SIZE && x<= --listSize) {
						for (int i = 0; i < x; i++)
							contact = contactsList.get(i);
						editSwitch(contact);
						System.out.print("\nUser Edited successfully.");
						break;
					}else{
						System.out.print("Wrong Input.It is not in the contact range.");
					}
				} else {
					System.out.print("Wrong Input.It is not a number.");
				}
			}while(true);
		}

	}

	private char printEdit(){
		System.out.println("\nSelect which do you want to edit:");
		System.out.println("\ta. First Name");
		System.out.println("\tb. Last Name");
		System.out.println("\tc. Street");
		System.out.println("\td. City");
		System.out.println("\te. State");
		System.out.println("\tf. Zip Code");
		System.out.println("\tg. Phone Number");
		System.out.println("\th. Email");
		System.out.println("\ti. All");
		System.out.println("\n");
		System.out.print("Select input:");
		char x; 
		do{
			x = user_input.next().charAt(0);
			if(x >= 'a' && x<= 'i')
				return x;
			else
				System.out.println("Wrong input, please enter a valid input.");
		} while (x < 'a' && x> 'i');
		return x;
	}

	private void editSwitch(Contact contact){
		char c = printEdit();
		switch (c){
		case 'a':
			System.out.print("New First Name: ");
			String first = user_input.next();
			contact.setFirst(first);
			break;
		case 'b':
			System.out.print("New Last Name: ");
			String last = user_input.next();
			contact.setLast(last);
			break;
		case 'c':
			System.out.print("New Street: ");
			String street = user_input.next();
			contact.setStreet(street);
			break;
		case 'd':
			System.out.print("New City: ");
			String city = user_input.next();
			contact.setCity(city);
			break;
		case 'e':
			System.out.print("New State: ");
			String state = user_input.next();
			contact.setState(state);
			break;
		case 'f':
			System.out.print("New Zip Code: ");
			String zip = user_input.next();
			contact.setZip(zip);
			break;
		case 'g':
			System.out.print("New Phone Number: ");
			String phone = user_input.next();
			contact.setPhone(phone);
			break;
		case 'h':
			System.out.print("New Email address: ");
			String email = user_input.next();
			contact.setEmail(email);
			break;
		case 'i':
			System.out.println("Edit the folowing info:");
			contact = getInfo(contact);
			break;
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

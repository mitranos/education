/**
 *
 * File:         Screen_Controller.java
 * Purpose:      Print the screen and manage input.
 * Project:      CSIS 3100 Assignment 02
 *
 * (c) Copyright Salvatore Mitrano 2013 All rights reserved.
 **/
import java.util.*;

public class Screen_Controller {
	Scanner user_input = new Scanner( System.in );
	Contacts contacts = new Contacts();

	private void printMenuTab() { 
		System.out.print("\u001b[2J");
		System.out.flush();
		System.out.println("\n");
		System.out.println("\ta. Enter Data");
		System.out.println("\tb. Display Data");
		System.out.println("\tc. Edit Data");
		System.out.println("\td. Delete Data");
		System.out.println("\te. Exit");
		System.out.println("\n");
	}

	private void selectField(char iField){
		switch(iField){
		case 'a':  contacts.addContact();
		break;
		case 'b':  contacts.printContact();
		break;
		case 'c':  contacts.editContact();
		break;
		case 'd':  contacts.deleteContact();
		break;
		case 'e':  printGreetings();
		break;
		}
	}

	public void printMenu(){
		char x;
		do{
			printMenuTab();
			System.out.print("Enter a value: ");
			x = user_input.next().charAt(0);
			if(x >= 'a' && x<= 'e')
				selectField(x);
			else
				System.out.println("Wrong input, please enter a valid input");
		} while (x != 'e');
	}

	private void printGreetings() {
		System.out.println("Thanks For Using my Program.\n(c) Copyright Salvatore Mitrano 2013. All rights reserved.");
	}
}

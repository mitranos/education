import java.util.*;

public class Menu {
	Scanner user_input = new Scanner( System.in );
	Contacts contacts = new Contacts();
	
	private void printMenuTab() {
		System.out.println("\n");
		System.out.println("\t01 Add Contact");
		System.out.println("\t02 Edit Contact");
		System.out.println("\t03 Show Contact");
		System.out.println("\t04 Delete Contact");
		System.out.println("\t05 Exit");
		System.out.println("\n");
	}
	
	private void selectField(int iField){
		switch(iField){
			case 1:  contacts.addContact();
			break;
			case 2:  contacts.editContact();
			break;
			case 3:  contacts.printContact();
			break;
			case 4:  contacts.deleteContact();
			break;
			case 5:  printGreetings();
			break;
		}
	}
	
	public void printMenu(){
		int x;
		do{
		printMenuTab();
		System.out.print("Enter a value: ");
		x = user_input.nextInt();
		selectField(x);
		} while (x != 5);
	}
	
	private void printGreetings() {
		System.out.println("Thanks For Using my Program.\n(c) Copyright Salvatore Mitrano 2013 All rights reserved.");
	}
}

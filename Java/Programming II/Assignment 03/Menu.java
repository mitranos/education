/**
 *
 * File:         Menu.java
 * Purpose:      Print the main menu and manage input.
 * Project:      CSIS 3100 Assignment 03
 *
 * (c) Copyright Salvatore Mitrano 2013 All rights reserved.
 **/
import java.util.*;

public class Menu {
	Scanner user_input = new Scanner( System.in );

	Words words = new Words();

	private void printMenuTab() {
		System.out.println("\n");
		System.out.println("\ta. Enter Data");
		System.out.println("\tb. Edit Data");
		System.out.println("\tc. Display Data");
		System.out.println("\td. Delete Data");
		System.out.println("\te. Save Data");
		System.out.println("\tf. Load Data");
		System.out.println("\tg. Exit");
		System.out.println("\n");
	}

	private void selectField(int iField){
		switch(iField){
		case 'a':  words.addWord();
		break;
		case 'b':  words.editWord();
		break;
		case 'c':  words.showWord();
		break;
		case 'd':  words.deleteWord();
		break;
		case 'e':  words.saveData();
		break;
		case 'f':  words.loadData();
		break;
		case 'g':  printGreetings();
		break;
		}
	}

	public void printMenu(){
		char x;
		do{
			printMenuTab();
			System.out.print("Enter a value: ");
			x = user_input.next().charAt(0);
			if(x >= 'a' && x<= 'g')
				selectField(x);
			else
				System.out.println("Wrong input, please enter a valid input");
		} while (x != 'g');
	}

	private void printGreetings() {
		System.out.println("Thanks For Using my Program.\n(c) Copyright Salvatore Mitrano 2013 All rights reserved.");
	}
}

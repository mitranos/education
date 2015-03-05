/**
 *
 * File:         Menu.java
 * Purpose:      Print the main menu and manage input.
 * Project:      CSIS 3100 Assignment 04
 *
 * (c) Copyright Salvatore Mitrano 2013 All rights reserved.
 **/
import java.util.*;

public class Menu {
	private Scanner user_input = new Scanner( System.in );
	private GameController game = new GameController();

	private void printIntro() {
		System.out.print("\u001b[2J");
		System.out.flush();
		System.out.println("                                ");
		System.out.println("    **********************      ");
		System.out.println("    * Welcome to Hangman!*      ");
		System.out.println("    **********************      ");
		System.out.println("                                ");
		System.out.println("If you're a hangman fanatic looking for a,    ");
		System.out.println("quick puzzle you've come to the right place!  ");
		System.out.println("                                              ");
		System.out.println("We've got three puzzles ready to be played.   ");
	}

	private void printPuzzleList(){
		System.out.println();
		System.out.println("\ta. Programming Languages");
		System.out.println("\tb. Countries");
		System.out.println("\tc. Music Genres");
		System.out.println("\td. Exit");
		System.out.println("\n");
	}


	private void selectField(int iField){
		switch(iField){
		case 'a': game.startGame(1);
		break;
		case 'b': game.startGame(2);
		break;
		case 'c': game.startGame(3);
		break;
		case 'd':  printGreetings();
		break;
		}
	}

	public void printMenu(){
		printIntro();
		char x;
		do{
			printPuzzleList();
			System.out.print("Chose The puzzle you want to play or Exit: ");
			x = user_input.next().charAt(0);
			if(x >= 'a' && x<= 'd')
				selectField(x);
			else
				System.out.println("Wrong input, please enter a valid input");
		} while (x != 'd');
	}

	private void printGreetings() {
		System.out.println("Thanks For Playing My Hangman Game.\n(c) Copyright Salvatore Mitrano 2013 All rights reserved.");
	}
}

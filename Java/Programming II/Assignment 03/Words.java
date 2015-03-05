/**
 *
 * File:         Words.java
 * Purpose:      Create a LIST<String> of Words and methods to manage the list data.
 * Project:      CSIS 3100 Assignment 03
 *
 * (c) Copyright Salvatore Mitrano 2013 All rights reserved.
 **/
import java.util.*;

public class Words {

	Scanner user_input = new Scanner( System.in );
	Data data = new Data();

	private ArrayList<String> wordList = new ArrayList<String>();

	public void addWord(){
		System.out.print("Please enter a word: ");
		String word = user_input.next();
		wordList.add(word);
		do{
			System.out.print("Do you want to enter another word Y/N: ");
			String 	yn = user_input.next();
			if (yn.equals("Y") || yn.equals("y")){
				System.out.print("Please enter a word: ");
				String word2 = user_input.next();
				wordList.add(word2);
			} else if (yn.equals("N") || yn.equals("n"))
				break;
		} while(true);
	}

	public void showWord(){
		if(wordList.isEmpty()){
			System.out.print("There is nothing to show!");
		}else{
			for(int i = 0; i < wordList.size(); i++)
				System.out.println(i + "-" + wordList.get(i));
		}
	}

	public void editWord(){
		if(wordList.isEmpty()){
			System.out.print("There is nothing to edit!");
		}else{
			showWord();
			do{
				System.out.print("Which one do you want to edit: ");
				String  s = user_input.next();
				if (isInteger(s)) {
					int x = Integer.parseInt(s);
					int listSize = wordList.size();
					if (x >= 0 && x<= --listSize) {
						System.out.print("Edit the word: ");
						String word = user_input.next();
						wordList.set(x, word);
						System.out.println("Word edited successfully.");
						break;
					}else{
						System.out.print("Wrong Input.It is not in the word range.");
					}
				} else {
					System.out.print("Wrong Input.It is not a number.");
				}
			}while(true);
		}
	}

	public void deleteWord(){
		if(wordList.isEmpty()){
			System.out.print("There is nothing to delete!");
		}else{
			showWord();
			do{
				System.out.print("Which one do you want do delete: ");
				String  s = user_input.next();
				if (isInteger(s)) {
					int x = Integer.parseInt(s);
					int listSize = wordList.size();
					if (x >= 0 && x<= --listSize) {
						wordList.remove(x);
						System.out.println("Word delected successfully.");
						break;
					}else{
						System.out.print("Wrong Input.It is not in the word range.");
					}
				} else {
					System.out.print("Wrong Input.It is not a number.");
				}
			}while(true);
		}
	}

	public void saveData(){
		data.saveFile(wordList);
	}

	public void loadData(){
		wordList = data.readFile(wordList);
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

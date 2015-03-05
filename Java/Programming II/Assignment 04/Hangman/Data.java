import java.util.*;
import java.io.*;


public class Data {
	//Creating an empty <string> List to store the words
	private ArrayList<String> hangmanWords = new ArrayList<String>();

	private String listType;
	private BufferedReader bf;


	/**
	 * This method return a List<String> from a .dat file  previously created.
	 * This method take an integer between 1 and 3. Which is the choice of the users. 
	 * @param intListType
	 * @return
	 */

	public ArrayList<String> getWordList (int intListType){

		switch(intListType){
		case 1: listType = "ProgrammingLanguages.dat";
		break;
		case 2: listType = "Countries.dat";
		break;
		case 3: listType = "MusicGenre.dat";
		break;
		}

		try{
			String word;
			bf = new BufferedReader(new FileReader(listType));
			while((word = bf.readLine()) != null ){
				hangmanWords.add(word);
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
		System.out.println("Puzzle has been loaded.");
		return hangmanWords;
	}

}

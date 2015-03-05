import java.util.*;


public class GameController {

	private Scanner user_input = new Scanner(System.in);
	private Random randomGenerator;
	private ArrayList<String> hangmanWords = new ArrayList<String>();
	private Data data = new Data();
	private Hangman hangmanCanvas = new Hangman();


	private static final int STARTING_GUESSES = 6;
	private int guessesLeft;
	private int hangmanCount;
	private String secretWord = "";
	private String showWord = "";
	private String guessedLetters = "";

	public void startGame(int userPuzzle){
		initiateNewGame(userPuzzle);
		secretWord = getRandomWord(hangmanWords).toUpperCase();
		initialWord(secretWord);
		do{
			hangmanCanvas.printHangman(hangmanCount);
			System.out.println("The word now looks like this: " + showWord);
			System.out.println("You have " + guessesLeft + " guesses left.");
			Character guess = readUserInput();
			processGuess(guess);
		}while(checkGame());
		//System.out.println(secretWord);
		//System.out.println(showWord);
	}

	private void initiateNewGame(int userPuzzle){
		guessesLeft = STARTING_GUESSES;
		hangmanCount = 1;
		hangmanWords = getWordsFromFile(userPuzzle);
		secretWord = "";
		showWord = "";
		guessedLetters = "";
	}

	/**
	 * 
	 * @param secretWord
	 */
	private void initialWord(String secretWord){
		char firstCharacter = secretWord.charAt(0);
		showWord = "" + firstCharacter;
		for(int i=1; i < secretWord.length(); i++){
			char character = secretWord.charAt(i);
			if(character >= 32 && character <= 47)
				showWord += character;			
			else if (character == firstCharacter)
				showWord += character;
			else
				showWord += "_";
		}
		guessedLetters += firstCharacter;
	}


	/**
	 * 
	 * @return boolean
	 */
	private boolean checkGame(){
		//losing condition
		if (guessesLeft == 0){
			hangmanCanvas.printHangman(hangmanCount);
			System.out.println("The word was: " + secretWord);
			System.out.println("YOU LOSE!");
			return false;
		}
		//winning condition
		else if (showWord.equals(secretWord)){
			System.out.println("You guessed the word: " + secretWord);
			System.out.println("YOU WIN!");
			return false;
		}
		//play continues
		return true;
	}

	/**
	 * 
	 * @param chr
	 */
	private void processGuess(Character chr){
		int x = secretWord.length();
		boolean hit = false;

		// loops through the secret_word looking for hits.
		for (int i=0; i < x; i++ ){
			/* if hits is found, this substitutes the guessed letter for the correct dash 
			 * in the word in progress. 
			 */
			if (chr.equals(secretWord.charAt(i))){
				//replaces the appropriate dash with the guessed letter
				showWord = showWord.substring(0, i) //the current word up to the guess
						+ secretWord.charAt(i) //appends the guessed letter
						+ showWord.substring(i+1, x); //appends the current word after the guess 
				hit = true;
			}
		}
		if (hit){
			System.out.println("That guess is correct.");
		}

		//no hits
		else {
			System.out.println("There are no " + chr + "'s in the word.");
			guessesLeft--;
			hangmanCount++;
		}

	}

	/**
	 * 
	 * @return Character
	 */
	private Character readUserInput(){

		//prompts for guess and sets as string.
		System.out.print("Please guess a letter: ");
		String input = user_input.next();

		//ensures that guess is only one letter
		if (input.length() != 1){
			System.out.println("Your must guess exactly one letter. Try again. ");
			return readUserInput();
		}

		//converts string to character
		Character ch = input.charAt(0);

		//ensures that the guess is a character
		if (Character.isLetter(ch) != true){
			System.out.println("You can only guess letters. Try again.");		
			return readUserInput();
		}		
		ch = Character.toUpperCase(ch);

		//ensures that the guess has not been guessed previously
		if (guessedLetters.indexOf(ch) >= 0){
			System.out.println("You've already guessed the letters \"" + guessedLetters + "\". Try again. ");
			return readUserInput();
		}

		//adds the guess to guessed letters.
		guessedLetters += ch;

		//returns guess
		return ch;
	}


	/**
	 * This method return a list of words chosen by the user. The three categories are:
	 * 1.Programming Languages
	 * 2.Countries
	 * 3.Music Genre
	 * @param userPuzzle
	 * @return 
	 */
	private ArrayList<String> getWordsFromFile(int userPuzzle){
		hangmanWords = data.getWordList(userPuzzle);
		return hangmanWords;
	}


	/**
	 * This method return a word chosen randomly from a list. 
	 * @param hangmanWords
	 * @return
	 */
	private String getRandomWord(ArrayList<String> hangmanWords){
		String word;
		randomGenerator = new Random();
		word = hangmanWords.get(randomGenerator.nextInt(hangmanWords.size()));
		return word;
	}
}
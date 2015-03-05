import java.util.ArrayList;


public class Main {

	/**
	 * @param args
	 */
	public static void main(String[] args) {
		// TODO Auto-generated method stub
		ArrayList<String> hangmanWords = new ArrayList<String>();
		Hangman hangman = new Hangman();
		hangman.PrintHangman(3);
		Data data = new Data();
		hangmanWords = data.getWordList(1);
		for(int i = 0; i < hangmanWords.size(); i++)
		{
			System.out.println(hangmanWords.get(i));
		}
	}
}

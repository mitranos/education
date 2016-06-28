import javax.swing.JFrame;



public class Main {

	/**
	 * @param args
	 */
	public static void main(String[] args) {
		// TODO Auto-generated method stub
		//Menu menu = new Menu();
		//menu.printMenu();
		DrawHangman p = new DrawHangman();
		
		JFrame mainFrame = new JFrame("Drawing Hangman");
		mainFrame.add(p);
		mainFrame.setSize(500,500);
		mainFrame.setDefaultCloseOperation(JFrame.EXIT_ON_CLOSE);
		mainFrame.setVisible(true);
	}
}
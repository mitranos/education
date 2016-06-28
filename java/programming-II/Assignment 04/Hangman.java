
public class Hangman {
	public void PrintHangman(int hangState){
		switch(hangState){
		case 1: HangPole();
			break;
		case 2:HangHead();
			break;
		case 3: HangBody();
			break;
		case 4: HangLeftHand();
			break;
		case 5: HangRightHand();
			break;
		case 6: HangLeftLeg();
			break;
		case 7: HangDead();
			break;
		}
	}
	
	private void HangDead(){
		System.out.println("       |---------|");
		System.out.println("       |         |");
		System.out.println("      ---        |");
		System.out.println("     {x x}       |");
		System.out.println("      ---        |");
		System.out.println("       |         |");
		System.out.println("      /|\\        |");
		System.out.println("     / | \\       |");
		System.out.println("      / \\        |");
		System.out.println("     /   \\       |");
		System.out.println("                 |");
		System.out.println("               -----");
	}
	
	private void HangLeftLeg(){
		System.out.println("       |---------|");
		System.out.println("       |         |");
		System.out.println("      ---        |");
		System.out.println("     {o o}       |");
		System.out.println("      ---        |");
		System.out.println("       |         |");
		System.out.println("      /|\\        |");
		System.out.println("     / | \\       |");
		System.out.println("      /          |");
		System.out.println("     /           |");
		System.out.println("                 |");
		System.out.println("               -----");
	}
	
	private void HangRightHand(){
		System.out.println("       |---------|");
		System.out.println("       |         |");
		System.out.println("      ---        |");
		System.out.println("     {o o}       |");
		System.out.println("      ---        |");
		System.out.println("       |         |");
		System.out.println("      /|\\        |");
		System.out.println("     / | \\       |");
		System.out.println("                 |");
		System.out.println("                 |");
		System.out.println("                 |");
		System.out.println("               -----");
	}
	
	private void HangLeftHand(){
		System.out.println("       |---------|");
		System.out.println("       |         |");
		System.out.println("      ---        |");
		System.out.println("     {o o}       |");
		System.out.println("      ---        |");
		System.out.println("       |         |");
		System.out.println("      /|         |");
		System.out.println("     / |         |");
		System.out.println("                 |");
		System.out.println("                 |");
		System.out.println("                 |");
		System.out.println("               -----");
	}
	
	private void HangBody(){
		System.out.println("       |---------|");
		System.out.println("       |         |");
		System.out.println("      ---        |");
		System.out.println("     {o o}       |");
		System.out.println("      ---        |");
		System.out.println("       |         |");
		System.out.println("       |         |");
		System.out.println("       |         |");
		System.out.println("                 |");
		System.out.println("                 |");
		System.out.println("                 |");
		System.out.println("               -----");
	}
	
	private void HangHead(){
		System.out.println("       |---------|");
		System.out.println("       |         |");
		System.out.println("      ---        |");
		System.out.println("     {o o}       |");
		System.out.println("      ---        |");
		System.out.println("                 |");
		System.out.println("                 |");
		System.out.println("                 |");
		System.out.println("                 |");
		System.out.println("                 |");
		System.out.println("                 |");
		System.out.println("               -----");
	}
	
	private void HangPole(){
		System.out.println("       |---------|");
		System.out.println("       |         |");
		System.out.println("                 |");
		System.out.println("                 |");
		System.out.println("                 |");
		System.out.println("                 |");
		System.out.println("                 |");
		System.out.println("                 |");
		System.out.println("                 |");
		System.out.println("                 |");
		System.out.println("                 |");
		System.out.println("               -----");
	}
}

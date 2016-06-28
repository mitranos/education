
public class Hangman{

	public void printHangman(int hangState){
		switch(hangState){
		case 1: hangPole();
		break;
		case 2: hangHead();
		break;
		case 3: hangBody();
		break;
		case 4: hangLeftHand();
		break;
		case 5: hangRightHand();
		break;
		case 6: hangLeftLeg();
		break;
		case 7: hangDead();
		break;
		}
	}

	private void hangDead(){
		System.out.print("\u001b[2J");
		System.out.flush();
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

	private void hangLeftLeg(){
		System.out.print("\u001b[2J");
		System.out.flush();
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

	private void hangRightHand(){
		System.out.print("\u001b[2J");
		System.out.flush();
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

	private void hangLeftHand(){
		System.out.print("\u001b[2J");
		System.out.flush();
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

	private void hangBody(){
		System.out.print("\u001b[2J");
		System.out.flush();
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

	private void hangHead(){
		System.out.print("\u001b[2J");
		System.out.flush();
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

	private void hangPole(){
		System.out.print("\u001b[2J");
		System.out.flush();
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

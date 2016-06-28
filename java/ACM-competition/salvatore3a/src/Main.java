import java.util.ArrayList;
import java.util.Scanner;


public class Main {
	static Scanner scan = new Scanner(System.in);
	static ArrayList<Fraction> list = new  ArrayList<Fraction>();
	static int x;
	static int y;
	
	public static void main(String[] args) {
		// TODO Auto-generated method stub
		
		list.add(new Fraction(0,0));
		for(int i = 1; i < 100; i++){
			for(int z = 1; z < i; z++){
				if(z != i){
					list.add(new Fraction(z,i));
				}
			}
		}
		
		//for(int w = 0; w < list.size(); w++){
		//	System.out.println(list.get(w));
		//}
		while(true){
		x = scan.nextInt();
		y = scan.nextInt();
		if(x == 0 && y == 0)
			break;
		Fraction fraction1 = list.get(x);
		Fraction fraction2 = list.get(y);
		Fraction result = fraction1.add(fraction2);
		System.out.print(retunValue(result, list));
		}
	}
	
	
	public static int retunValue(Fraction fract, ArrayList<Fraction> list){
		String fraction1 = fract.toString();
		String fraction2;
		for(int i = 0; i < list.size(); i++){
			fraction2 = list.get(i).toString();
			if(fraction1.equals(fraction2)){
				return i;
			}
		}
		return 0;
		
	}
}

class Fraction {
	private int numerator;
	private int denominator;

	Fraction(int n, int d) {
		numerator = n; 
		denominator = d;
	}

	public Fraction add (Fraction f2) {
		Fraction fract = new Fraction((numerator * f2.denominator) + (f2.numerator * denominator),(denominator * f2.denominator));    
		return fract;
	}

	public String toString()   {
		return (numerator + "/" + denominator);
	}
}
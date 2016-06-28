import java.util.ArrayList;
import java.util.Collections;
import java.util.Scanner;


public class Main {

	static Scanner scan = new Scanner(System.in);
	static ArrayList<Integer> list = new  ArrayList<Integer>();
	static ArrayList<Integer> listStop = new  ArrayList<Integer>();
	static int n, sum;
	static int repeat = 9;
	static String str = "";
	static String coeff;


	public static void main(String[] args) {
		while(true){
		for(int i = 0; i < repeat; i++){
			n = scan.nextInt();
			list.add(n);
			if(n != 0)
				listStop.add(n);
		}
		if(listStop.size() == 0)
			break;

		//Reversing List
		Collections.reverse(list);

		for(int z = 0; z < list.size(); z++){
			str = appendPower(str, z, list.get(z));
		}

		if (str.charAt(0) == '+')
			str = str.substring(2);
		else if(str.charAt(0) == '-')
			str = "-" + str.substring(2);
		System.out.println(str);
		str = "";
		list.clear();
		listStop.clear();
		}
	}

	public static String appendPower(String str, int power, Integer coefficient){
		if(coefficient == 0){
			return str;
		} else if (coefficient > 0){
			coeff = coefficient.toString();
			coeff = (coeff.equals("1")) ? "" : coeff;
			if(power == 0){
				str = "+ " + coefficient + " " + str;
			} else if(power == 1){
				str = "+ " + coeff + "x " + str;
			} else {
				str = "+ " + coeff + "x^" + power + " " + str;
			}
		} else {
			coefficient = Math.abs(coefficient);
			coeff = coefficient.toString();
			coeff = (coeff.equals("1")) ? "" : coeff;
			if(power == 0){
				str = "- " + coefficient + " " + str;
			} else if(power == 1){
				str = "- " + coeff + "x" + power + " " + str;
			} else {
				str = "- " + coeff + "x^" + power + " " + str;
			}
		}
		return str;
	}
}

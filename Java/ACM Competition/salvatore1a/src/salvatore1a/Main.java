package salvatore1a;

import java.util.ArrayList;
import java.util.Scanner;

public class Main {

	static Scanner scan = new Scanner(System.in);
	static ArrayList<String> list = new  ArrayList<String>();
	static int n, setSize;
	static int increment = 1;
	static String name;

	public static void main(String[] args) {
		// TODO Auto-generated method stub
		do{
			n = scan.nextInt();
			if(n == 0)
				break;
			for(int i = 0; i < n ; i++){
				name = scan.next();
				list.add(name);
			}

			System.out.println("SET " + increment);
			for(int y =0; y < list.size(); y += 2){
				System.out.println(list.get(y));
			}
			if((list.size() % 2) == 1 )
			{
				for(int z = list.size() - 2; z >= 1 ; z -= 2){
					System.out.println(list.get(z));
				}
			}else{
				for(int z = list.size() - 1; z >= 1 ; z -= 2){
					System.out.println(list.get(z));
				}
			}
			increment++;
			list.clear();
		} while (!(n == 0));
	}
}

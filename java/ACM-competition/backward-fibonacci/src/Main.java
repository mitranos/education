import java.util.ArrayList;
import java.util.Scanner;


public class Main {
	static Scanner scan = new Scanner(System.in);
	static ArrayList<Integer> list = new  ArrayList<Integer>();
	static int n ;
	static int m ;
	static int rep;

	public static void main(String[] args) {
		// TODO Auto-generated method stub
		do{
			n = scan.nextInt();
			m = scan.nextInt();
			rep = scan.nextInt();

			if ((n == 0) && (m == 0) && (rep == 0))
				break;
			
			System.out.println("for "+ n + " " + m);

			FibonacciIterativePrev(n, m, rep);
			System.out.println();
			FibonacciIterativeNext(n, m, rep);
			
			System.out.println();
			System.out.println();
			
		}while(!((n == 0) && (m == 0) && (rep == 0)));
	}


	static void FibonacciIterativePrev(int n, int m, int rep)
	{

		int prevPrev = n;
		int prev = m;
		int result = 0;

		System.out.print("Next " + rep + ": ");
		
		for (int i = 0; i < rep; i++)
		{
			result = prev - prevPrev;
			//System.out.print(result + ", ");
			list.add(result);
			prev = prevPrev;
			prevPrev = result;
		}

		for (int x = list.size() - 1; x >= 0; x--){
			if (x == 0)
				System.out.print(list.get(x));
			else
				System.out.print(list.get(x)+ ", ");
		}
		list.clear();
	}

	static void FibonacciIterativeNext(int n, int m, int rep)
	{

		int prevPrev = n;
		int prev = m;
		int result = 0;

		System.out.print("Prev " + rep + ": ");

		for (int i = 0; i < rep; i++)
		{
			result = prev + prevPrev;
			if(i == rep-1)
				System.out.print(result);
			else
				System.out.print(result + ", ");
			prevPrev = prev;
			prev = result;
		}
	}
}

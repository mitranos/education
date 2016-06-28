import java.util.Scanner;


public class Main {
	static Scanner scan = new Scanner(System.in);
	static long x ;
	static String number;

	public static void main(String[] args) {
		// TODO Auto-generated method stub
		do{
			x = scan.nextLong();
			if(x == 0)
				break;
			System.out.println(returnSum(x));
		}while(true);
	}


	public static long returnSum(long x){
		long result = 0;

		String number = x + "";
		char[] myArray = number.toCharArray();
		if (myArray.length == 1)
			return x;
		else {
			for(int i = 0; i < myArray.length; i++){
				result = result + Character.getNumericValue(myArray[i]);
			}
			number = result + "";
			if (number.length() > 1)
				result = returnSum(result);
		}
		return result;
	}
}

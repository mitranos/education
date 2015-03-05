import java.util.Scanner;

public class Main {

	static Scanner scan = new Scanner(System.in);
	static Integer n, x;
	static String stringByte;
	static byte[] byteArray;

	public static void main(String[] args) {
		n = scan.nextInt();
		for(int i = 0; i < n; i++){
			x = scan.nextInt();
			stringByte = Integer.toBinaryString(x);
			stringByte = concatZeros(stringByte);
			stringByte = reverseString(stringByte);
			System.out.println(Integer.parseInt(stringByte, 2));
		}
	}


	public static String reverseString(String str){
		String newStr = "";
		for(int i = str.length() -1; i >= 0 ; i--){
			newStr += str.charAt(i);
		}
		return newStr;
	}

	public static String concatZeros(String str) {
		String newStr = "";
		if(str.length() < 8){
			for(int i = str.length(); i < 8; i++){
				newStr += "0";
			}
			return newStr + str;
		}
		return str;
	}
}

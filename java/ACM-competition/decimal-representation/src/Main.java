import java.util.*;

public class Main {

	public static void main(String[] args) {
		// TODO Auto-generated method stub
		Scanner in = new Scanner(System.in);
		int[] Ar = new int[501];
		int temp;
		Ar[0] = 0;
		Ar[1] = 1;
		Ar[2] = 3;
		for( int i = 3; i < 501; i++){
			Ar[i] = Ar[i - 1];
			for(int j = 1; j < i; j++){
				temp = getLength(i,j);
				if(temp > Ar[i])
					Ar[i] = temp;
				
				temp = getLength(j, i);
				if(temp > Ar[i])
					Ar[i] = temp;
			}
		}
		//While loop
		for(int w = 1; w < 501; w++)
			System.out.println("Ar[" + w + "] = " +Ar[w]);
	}
	
	
	
	public static int getLength (int num, int den){
		ArrayList<Integer> maxSize = new ArrayList<Integer>();
		maxSize.add(0);
		int remainder = num % den;
		if(remainder == 0){
			String name = "" + num/den;
			return name.length();
		} else {
			while(!maxSize.contains(remainder) ){
				maxSize.add(remainder);
				remainder = (10 * remainder) % den;
			}
		}
		String inFront = "" + num/den;
		int inFrontInt = inFront.length() + 1;
		int Back = maxSize.size() -1;
		return inFrontInt + Back;
	}

}

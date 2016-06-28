import java.util.*;


public class Solution {

	public static void main(String[] args) {
		// TODO Auto-generated method stub
		System.out.println("Hello World");
		int[] arr = { 1,2,3,4,5,6,5,4,3,2,1};
		System.out.println(solution(arr));

	}

	
	public static int solution(int[] A) {
        // write your code in Java
		int[] lower;
		int[] upper;
		for(int i=0; i < A.length; i++){
			if(i==0){
				lower = Arrays.copyOfRange(A, 0, 0);
				upper = Arrays.copyOfRange(A, i + 1, A.length -1 );
			}else{
				lower = Arrays.copyOfRange(A, 0, i );
				upper = Arrays.copyOfRange(A, i + 1, A.length );
			}
			
			System.out.println("i: "+ i +" lower: " + sum(lower) + " upper: " + sum(upper));
			
			if(sum(lower) == sum(upper)){
				return i;
			}
		}
        return -1;
    }
	
	public static int sum(int[] A){
		int sum =0;
		for(int i =0; i < A.length ;i++){
			sum += A[i];
		}
		return sum;
	}
}

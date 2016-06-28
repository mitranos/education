import java.util.*;

public class Main {

	public static void main(String[] args) {
		// TODO Auto-generated method stub
		System.out.println(solution(12511));
	}

	
	public static int solution(int X) {
        // write your code in Java
		ArrayList<Integer> list = new ArrayList<Integer>();
		String number = X + "";
		
		
		for(int i = 0; i < number.length(); i++){
			int num = Integer.parseInt(number.substring(0, i) + number.charAt(i) + number.substring(i, number.length()));
			list.add(num);
		}
		return largest(list);
    }
	
	public static int largest(ArrayList<Integer> list){
		Collections.sort(list);
		return list.get(list.size() - 1);
	}
}

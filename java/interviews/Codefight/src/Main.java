
public class Main {

	public static void main(String[] args) {
		// TODO Auto-generated method stub
		int[] XP = {200, 100, 70, 130, 100, 800, 810};
		opponentMatching(XP);
	}
	
	static int[][] opponentMatching(int[] XP) {
	    int radius = 0;
	    int result[][] = new int[XP.length][2];
	    int x = 0;
	    int val1, val2;
	    for(int i = 0; i < XP.length; i++){
	        for(int j = i + 1; j < XP.length; j++){
	            val1 = XP[i];
	            val2 = XP[j];
	            if(val1 + radius == val2+ radius){
	                result[x][0] = val1;
	                result[x][1] = val2;
	                x++;
	                XP = remove(XP, j);
	                XP = remove(XP, i);
	            }
	        }
	    }
	    return result;
	}

	static public int[] remove(int[] arr, int elm){
	    for(int i = elm; i < arr.length - 1; i++){
	        arr[i] = arr[ i + 1 ];
	    }
	    return arr;
	}

}

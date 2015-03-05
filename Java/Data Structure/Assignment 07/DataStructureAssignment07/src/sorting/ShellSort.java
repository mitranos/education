package sorting;

public class ShellSort {
	
	public static <T extends Comparable<T>> void shellSort(T[] data) {
		int increment = data.length / 2;
		
		int j;
		T temp;
		
		while (increment > 0) {
			for (int i = increment; i < data.length; i++) {
				j = i;
				temp = data[i];
				while (j >= increment && data[j - increment].compareTo(temp) > 0) {
					data[j] = data[j - increment];
					j = j - increment;
				}
				data[j] = temp;
			}
			if (increment == 2)
				increment = 1;
			else
				increment *= (5.0 / 11);
		}
	}
}

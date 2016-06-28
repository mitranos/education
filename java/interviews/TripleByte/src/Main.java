
public class Main {

	public static void main(String[] args) {
		// TODO Auto-generated method stub
		f("314159265358", 27182);
	}

	static void f(String str, double num) {
		for (int i = 1; i <= str.length(); i++) {
			String initial = str.substring(0, i);
			double sum = Double.parseDouble(initial);
			recursion(0, sum,  num, str.substring(i), initial);
		}
	}
	
	
	static void recursion(double total, double sum, double num, String str, String expr) {
		if (str.length() == 0 && total + sum == num) {
				System.out.println(expr + " = " + (int)num);
		} else {
			for (int i = 1; i <= str.length(); i++) {
				String sub = str.substring(i);
				double current = Double.parseDouble(str.substring(0, i));
				recursion(total + sum, current,  num, sub, expr + " + " + (int)current);
				recursion(total + sum, -current, num, sub, expr + " - " + (int)current);
				recursion(total, sum * current, num, sub, expr + " * " + (int)current);
				recursion(total, sum / current, num, sub,  expr + " / " + (int)current);
			}
		}
	}
}

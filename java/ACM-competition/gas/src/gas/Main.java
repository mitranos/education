package gas;

import java.util.ArrayList;
import java.util.Scanner;

public class Main {
	static Scanner in = new Scanner( System.in );
	
	public static void main(String[] args) {
		// TODO Auto-generated method stub
		int tankSize, mpg, numberOfStations, totalTripSize;
		ArrayList<GasStation> list = new ArrayList<GasStation>();
		
		tankSize = in.nextInt();
		mpg = in.nextInt();
		numberOfStations = in.nextInt();
		totalTripSize = in.nextInt();
		for(int i = 0; i < numberOfStations ; i++){
			list.add(new GasStation(i, in.nextInt(), in.nextDouble()));
		}
		for(int i = numberOfStations, j = numberOfStations-1; i <  2*numberOfStations; i++, j--){
			list.add(new GasStation(i, list.get(j).mile, list.get(j).price));
		}
	}

}


class GasStation implements Comparable<GasStation>
{
    public int mile, number;
    public double minCost = Double.POSITIVE_INFINITY;
    public double price;
    public GasStation previous;
    public GasStation(int i, int argMile, double argPrice) { number = i; mile = argMile; price = argPrice;}
    public String toString() { return number + ""; }
    public int compareTo(GasStation other)
    {
        return Double.compare(minCost, other.minCost);
    }
}
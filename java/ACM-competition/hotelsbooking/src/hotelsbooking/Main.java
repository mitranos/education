package hotelsbooking;

import java.util.Scanner;


public class Main {

	public static int cities, numberOfHotels, roads;
	public static int[] hotels;
	public static WeightedGraph graph;
	public static int[] dijkstraResult;
	
	public static void main(String[] args) {
		// TODO Auto-generated method stub
		
		Scanner in = new Scanner(System.in);
		
		
		while(true){
		
			cities = in.nextInt();
			
			if(cities == 0)
				break;
			
			graph = new WeightedGraph(cities);
			graph.setLabels(cities);
			
			numberOfHotels = in.nextInt();
			hotels = new int[numberOfHotels];
			for(int i = 0; i < numberOfHotels; i++){
				hotels[i] = in.nextInt();
			}
			
			roads = in.nextInt();
			
			for(int j = 0; j<roads; j++){
				int a = in.nextInt(), b = in.nextInt(), c = in.nextInt();
				
				graph.addEdge(a -1, b - 1, c);
				//graph.addEdge(b -1, a - 1, c);
			}
			
			dijkstraResult = graph.dijkstra(0);
			
			for (int n=0; n<dijkstraResult.length; n++) {
				System.out.println(dijkstraResult[n]);
			}
			
			for (int n=0; n<dijkstraResult.length; n++) {
				graph.printdDijkstraPath(dijkstraResult, 0, n);
			}
		}
	}

}

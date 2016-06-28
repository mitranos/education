package darkroads;

import java.util.*;

public class Main {

	static int junctions_vertex;
	static int roads_edges;	
	static WeightedGraph graph; 
	static int[] roads;
	static int total = 0;
	
	public static void main(String[] args) {
		// TODO Auto-generated method stub
		Scanner in = new Scanner(System.in);
		
		
			while(true){
				junctions_vertex = in.nextInt();
				roads_edges = in.nextInt();
				
				if(junctions_vertex == 0 && roads_edges == 0){
					break;
				}
				
				graph = new WeightedGraph(junctions_vertex);
				roads = new int[junctions_vertex];
				graph.setLabels(junctions_vertex);
				
				for(int i = 0; i < roads_edges; i++){
					int a = in.nextInt(), b = in.nextInt(), c = in.nextInt();
					
					graph.addEdge(a, b, c);
					graph.addEdge(b, a, c);
					total += graph.getWeight(a, b);	
					
				}
				
				//graph.print();
				
				roads = graph.prim(0);
				int other = 0;
				for(int i = 0; i < junctions_vertex; i++){
					other += roads[i];
				}
				System.out.println(total - other);
			}
		
	}

}

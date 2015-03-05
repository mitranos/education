import java.util.ArrayList;

/**
 * @author Paul Kenison
 * Written on 10/8/2008
 * This data structure is used to store a graph using an adjacency matrix.
 * The matrix contains a one in the row for each node of the graph (in its
 * appropriate column) if it is has an edge to that node.  The second matrix
 * contain the weights in the corresponding columns.
 * Edited on 11/13/2011
 *
 */
public class AdjacencyMatrix {

    private int numNodes;
    private int[][] matrix;
    private int[][] weights;
    private char[] nodeNames;

    /** Creates a new instance of AdjacencyMatrix */
    public AdjacencyMatrix(int n, char[] names) {
        numNodes = n;
        matrix = new int[n][n];
        weights = new int[n][n];
        nodeNames = names;
    }

    public AdjacencyMatrix(int n, char[] names, int[][] m, int[][] w) {
        numNodes = n;
        matrix = m;
        weights = w;
        nodeNames = names;
    }

    // This method is used to align all values so the matrix will print in columns
    public static String setW(int x, int size) {
        String ans = "";
        String ans2 = "" + x;
        for (int i = 0; i < size - ans2.length(); i++) {
            ans = ans + " ";
        }
        ans = ans + ans2;

        return ans;
    }

    public String printMatrix(int[][] temp) {
        int i, j;
        String s = "";

        for (i = 0; i < getNumNodes(); i++) {
            for (j = 0; j < getNumNodes(); j++) {
                s += setW(temp[i][j], 5);    // have each value of the matrix take 5 spaces
            }
            s += "\n";
        }
        return s;
    }

    public String toString() {
        int i;
        String answer = "The number of nodes is " + getNumNodes() + "\n" +
                "The names of the vertices are: \n{";
        for (i = 0; i < numNodes-1; i++)
            answer += "'"+ nodeNames[i] + "', ";
        answer += "'"+ nodeNames[i] + "'}\n\n";

        answer += "The adjacency Matrix is:\n";
        answer += printMatrix(getMatrix());
        answer += "\nThe matrix of weights is:\n";
        answer += printMatrix(getWeights());

        return answer;
    }

    public int getNumNodes() {
        return numNodes;
    }

    public void setNumNodes(int numNodes) {
        this.numNodes = numNodes;
    }

    public int[][] getMatrix() {
        return matrix;
    }

    public void setMatrix(int[][] matrix) {
        this.matrix = matrix;
    }

    public int[][] getWeights() {
        return weights;
    }

    public void setWeights(int[][] weights) {
        this.weights = weights;
    }

    public char[] getNodeNames() {
        return nodeNames;
    }

    public void setNodeNames(char[] nodeNames) {
        this.nodeNames = nodeNames;
    }
    
    public VerticesAndEdges convertToVerticesAndEdges() {
    	ArrayList<Edge> egSet = new ArrayList<Edge>();
		for(int i = 0; i < getNumNodes(); i++){
			for(int j =0; j < getNumNodes();j++){
				if(weights[i][j] != 0)
					egSet.add(new Edge(nodeNames[i],nodeNames[j],weights[i][j]));
			}
		}
    	Edge [] edgeSet = new Edge[egSet.size()];
    	for(int k = 0; k < egSet.size(); k++)
    		edgeSet[k] = egSet.get(k);
    	return new VerticesAndEdges(nodeNames, edgeSet);
    }
}


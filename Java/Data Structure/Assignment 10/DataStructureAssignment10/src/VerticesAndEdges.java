/**
 * @author Paul Kenison
 * Written on 10/8/2008
 * This data structure is used to store a graph using sets of vertices
 * and edges.  It uses the Edge class.  There is an array of vertices and
 * an array of edges.
 *
 * Edited on 11/13/2011
 *
 */


/**
 *@author pkenison
 */
public class VerticesAndEdges {
    private int numOfNodes;
    private int numOfEdges;
    private Edge [] edges;
    private char[] nodeNames;

    public VerticesAndEdges(){
    }

    public VerticesAndEdges(char [] vertices, Edge [] edgeSet){
        setNodeNames(vertices);
        setEdges(edgeSet);
        setNumOfNodes(vertices.length);
        setNumOfEdges(getEdges().length);
    }

    public String toString() {
        int i;
        String ans = "The following is the set of Vertices and edges: "
                + "\nThe set of vertices is {";
        for (i = 0; i < getNumOfNodes()-1; i++)
            ans += "'"+ getNodeNames()[i] + "', ";
        ans += "'"+ getNodeNames()[i] + "'}\nThe set of edges is \n{";
        for (i = 0; i < getNumOfEdges()-1; i++){
            ans += "(" + getEdges()[i].getOrigin() + ", " + getEdges()[i].getTerminus()
                    + ", " + getEdges()[i].getWeight() + "),";
            if (((i+1)%7) == 0)
                ans += "\n";
        }
        ans += "(" + getEdges()[i].getOrigin() + ", " + getEdges()[i].getTerminus()
                    + ", " + getEdges()[i].getWeight() + ")}\n";

        return ans;
    }

	public void setNumOfNodes(int numOfNodes) {
		this.numOfNodes = numOfNodes;
	}

	public int getNumOfNodes() {
		return numOfNodes;
	}

	public void setNumOfEdges(int numOfEdges) {
		this.numOfEdges = numOfEdges;
	}
	public int getNumOfEdges() {
		return numOfEdges;
	}

	public void setEdges(Edge [] edges) {
		this.edges = edges;
	}

	public Edge [] getEdges() {
		return edges;
	}

	public void setNodeNames(char[] nodeNames) {
		this.nodeNames = nodeNames;
	}

	public char[] getNodeNames() {
		return nodeNames;
	}
	
	public AdjacencyMatrix convertToAdjacMatrix(){
		int [][] x = {};
		int [][] w = {};
		
		for(int i = 0; i < getNumOfNodes()-1; i++){
			for(int j =0; j < getNumOfNodes()-1;j++){
				
			}
		}
		
		return new AdjacencyMatrix(numOfNodes,nodeNames,x,w);
	}
}

/**
 *
 * @author Paul Kenison
 * Written on 10/8/2008
 *
 * Edited on 11/13/2011
 *
 * The project demonstrates two data structures that could be used to store
 * a graph.  These data structures are the adjacency matrix (a second matrix
 * containing the weights of a weighted graph is also stored) and a set of 
 * vertices and edges.  You are to write two methods, one that would convert
 * from the set of vertices and edges data structure to an adjacency matrix
 * data structure as well as the matrix for the weights in the graph and
 * the other that would convert from the adjacency matrix data structure to
 * the set of vertices and edges data structure. Two identical graphs are
 * hard coded (one using the adjacency matrix data structure and the other
 * using the sets of vertices and edges).  Because these are identical, if you
 * output the original (there is a toString in each class) and compare the
 * result the output of its counterpart you have the ability to see if your
 * conversion is correct.
 *
 * Select either data structure and create three additional methods in that
 * class.  These method would be a method which would (1) find the indegree
 * of a vertex passed as an argument to the method, (2) find the
 * outdegree of a vertex passed as an argument to the method and (3) a
 * method that will check the entire graph and indicate whether or not it
 * is a directed graph.  Return a boolean value.  These two methods to find
 * the degree (in or out) should work for any vertex in any graph.  The
 * method to check a graph to see if it is a directed graph should work
 * for any graph.
 * 
 */
public class ConvertGraph {
    

    public VerticesAndEdges hardCodeVertAndEdges() {
        char [] theVertices = {'A','B','C','D','E','F','G','H'};
        Edge [] edgeSet = new Edge[28];

        edgeSet[0] = new Edge('A','B',15);
        edgeSet[1] = new Edge('A','D',19);
        edgeSet[2] = new Edge('B','A',15);
        edgeSet[3] = new Edge('B','D',11);
        edgeSet[4] = new Edge('B','F',28);
        edgeSet[5] = new Edge('B','H',12);
        edgeSet[6] = new Edge('C','A',14);
        edgeSet[7] = new Edge('C','D',7);
        edgeSet[8] = new Edge('C','E',16);
        edgeSet[9] = new Edge('D','A',19);
        edgeSet[10] = new Edge('D','B',11);
        edgeSet[11] = new Edge('D','C',7);
        edgeSet[12] = new Edge('D','E',12);
        edgeSet[13] = new Edge('D','F',24);
        edgeSet[14] = new Edge('E','C',16);
        edgeSet[15] = new Edge('E','D',12);
        edgeSet[16] = new Edge('E','G',20);
        edgeSet[17] = new Edge('E','H',9);
        edgeSet[18] = new Edge('F','B',28);
        edgeSet[19] = new Edge('F','D',24);
        edgeSet[20] = new Edge('F','G',6);
        edgeSet[21] = new Edge('G','E',20);
        edgeSet[22] = new Edge('G','F',6);
        edgeSet[23] = new Edge('G','H',5);
        edgeSet[24] = new Edge('H','B',12);
        edgeSet[25] = new Edge('H','E',9);
        edgeSet[26] = new Edge('H','F',13);
        edgeSet[27] = new Edge('H','G',5);

        return new VerticesAndEdges(theVertices, edgeSet);
    }

    public AdjacencyMatrix hardCodeAdjacencyMatrix()
    {
        //  This is a method to use an adjacency matrix data structure to
        //  store the graph demonstrated in the slides for tonight's live class
        int n = 8;
        char [] l = {'A','B','C','D','E','F','G','H'};
        int [][] x = {{0,1,0,1,0,0,0,0},{1,0,0,1,0,1,0,1},{1,0,0,1,1,0,0,0},
                    {1,1,1,0,1,1,0,0},{0,0,1,1,0,0,1,1},{0,1,0,1,0,0,1,0},
                    {0,0,0,0,1,1,0,1},{0,1,0,0,1,1,1,0}};
        int [][] w = {{0,15,0,19,0,0,0,0},{15,0,0,11,0,28,0,12},{14,0,0,7,16,0,0,0},
                    {19,11,7,0,12,24,0,0},{0,0,16,12,0,0,20,9},{0,28,0,24,0,0,6,0},
                    {0,0,0,0,20,6,0,5},{0,12,0,0,9,13,5,0}};
              
        AdjacencyMatrix myMatrix = new AdjacencyMatrix(n,l,x,w);
        
        return myMatrix; 
    }
    
    /** Creates a new instance of ConvertGraph */
    public static void main(String[] args) {

        ConvertGraph myGraphConverter = new ConvertGraph();
        
        AdjacencyMatrix myMatrix = myGraphConverter.hardCodeAdjacencyMatrix();
        VerticesAndEdges myVertAndEdges = myGraphConverter.hardCodeVertAndEdges();
     
        System.out.println(myMatrix);
        System.out.println(myVertAndEdges);
        VerticesAndEdges myVertAndEdges2 = myMatrix.convertToVerticesAndEdges();
//      AdjacencyMatrix myMatrix2 = myVertAndEdges.convertToAdjacMatrix();
        
        System.out.println(myVertAndEdges2);
        
    }
}

/**
 * @author Paul Kenison
 * Written on 10/8/2008
 * This data structure is used to store an Edge of a graph.  Each edge has a
 * start vertex, often called the ORIGIN, and the end location,m often called
 * the TERMINUS.  In addition each edges contains an instance variable to
 * store the weight if it is a weighted graph.  These same edges could be
 * used  * if the graph was not a weighed graph and the values of all weights
 * could be set to 0 or -1.
 *  
 * Edited on 11/13/2011
 *
 */


/**
 *
 * @author pkenison
 */
public class Edge {
    private char origin;
    private char terminus;
    private int weight;

    public Edge(){

    }

    public Edge(char o, char t, int w){
        origin = o;
        terminus = t;
        weight = w;
    }

    public char getOrigin() {
        return origin;
    }

    public void setOrigin(char origin) {
        this.origin = origin;
    }

    public char getTerminus() {
        return terminus;
    }

    public void setTerminus(char terminus) {
        this.terminus = terminus;
    }

    public int getWeight() {
        return weight;
    }

    public void setWeight(int weight) {
        this.weight = weight;
    }
}

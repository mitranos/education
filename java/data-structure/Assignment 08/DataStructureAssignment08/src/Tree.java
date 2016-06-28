/*  
 *  Written by P. E. Kenison
 *  Written on 3/23/2014
 *  This is the declaration of the Tree class.  It has a single instance variables
 *  tThat instance variable is a TreeNode object holding the information for the
 *  Golfer who is the first one added to the binary search tree.
 *  There are methods in the class to insert a new TreeNode into the Tree, and
 *  also methods to output the values in the tree during of three traversals
 *  (preorder, inorder and ppostorder).  These for methods have similarly named 
 *  methods in the TreeNode class.  The methods in this this class start the
 *  process of performing the action on the tree and the method in the TreeNode
 *  class are represent the similar action at any TreeNode object.  Having 
 *  method in both classes allow the possibility of an empty tree.
 */

public class Tree {
	private TreeNode root;  	// root of the tree stored here

	// emtpy constructor - root not know
	public Tree() {
		setRoot(null);
	}

	// constructor with the known valyue of the root
	public Tree(TreeNode node) {
		setRoot(node);
	}

	// accessor of the root
	public TreeNode getRoot() {
		return root;
	}

	// muitator for the root
	public void setRoot(TreeNode root) {
		this.root = root;
	}

	// insert a value starting at the root
	public void insert(TreeNode g){
		if (root == null)
			root = g;			// insert at the root if a root is not there
		else
			root.insert(g);		// concentrate on inserting at the root
	}

	// do a preorder traversal starting at the root
	public void preorder() {
		if (root == null)		// nothing in the tree
			System.out.println("The tree is empty - nothing to output");
		else {
			System.out.println("The preorder traversal of the tree is:\n");
			printHeader();
			root.preorder();	// print out values at all TreeNodes
			System.out.println();
		}	
	}

	// do a inorder traversal starting at the root
	public void inorder() {
		if (root == null)		// nothing in the tree
			System.out.println("The tree is empty - nothing to output");
		else {
			System.out.println("The inorder traversal of the tree is:\n");
			printHeader();
			root.inorder();	// print out values at all TreeNodes
			System.out.println();
		}	
	}

	// do a postorder traversal starting at the root
	public void postorder() {
		if (root == null)		// nothing in the tree
			System.out.println("The tree is empty - nothing to output");
		else {
			System.out.println("The postorder traversal of the tree is:\n");
			printHeader();
			root.postorder();	// print out values at all TreeNodes
			System.out.println();
		}	
	}

	// print out a header for neatly aligned data
	public void printHeader() {
		System.out.printf("%-50s %-42s %-15s %-15s %n", "Course Name", "Designer", "Year Built", "Low Greens Fee");
		System.out.printf("%-50s %-42s %-15s %-15s %n", "-----------", "--------", "----------", "--------------");
	}
}

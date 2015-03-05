/*  
 *  Written by P. E. Kenison
 *  Written on 3/23/2014
 *  This is the declaration of the TreeNode class.  It has a three instance variables
 *  These instance variable sre the stored values (in this application a Golfer
 *  object) and two other TreeNode objects holding the address of the left and
 *  right child of this TreeNode object (it hold null if there is no child)
 *
 *  There are methods in the class to insert a new TreeNode at this TreeNode, and
 *  also methods to output the values in the tree during of three traversals
 *  (preorder, inorder and postorder).  These four methods have similarly named 
 *  methods in the Tree class.  The methods in this this class are concentrating
 *  on the process of performing the action at that specific TreeNode.  Having 
 *  methods in both classes allow the possibility of an empty tree.
 */

public class TreeNode {
	private GolfCourse storedObj;	// hold the Golfer object stored in the Tree
	private TreeNode left;		// hold a pointer (memory address) to the left child 
	private TreeNode right;		// hold a pointer (memory address) to the right child 

	// empty constructor
	public TreeNode() {
		setStoredObj(null);
		setLeft(null);
		setRight(null);
	}

	// constructor with a known Golfer object
	public TreeNode(GolfCourse so) {
		setStoredObj(so);
		setLeft(null);
		setRight(null);
	}

	// definitions of accessors and mutators
	public GolfCourse getStoredObj() {
		return storedObj;
	}

	public void setStoredObj(GolfCourse storedObj) {
		this.storedObj = storedObj;
	}

	public TreeNode getLeft() {
		return left;
	}

	public void setLeft(TreeNode left) {
		this.left = left;
	}

	public TreeNode getRight() {
		return right;
	}

	public void setRight(TreeNode right) {
		this.right = right;
	}

	// insert the new TreeNode at the calling TreeNode object
	public void insert(TreeNode tn) { 
		// if new insert value is less than the value at the calling object look left
		if (this.getStoredObj().getLowGreenFee() > tn.getStoredObj().getLowGreenFee()){
			if (this.getLeft() == null)  // if null store it there
				this.setLeft(tn);
			else
				this.getLeft().insert(tn);  // otherwise call insert at the left child
		} else {  // if new insert value is not less than the value at the calling object look right
			if (this.getRight() == null)   // if null store it there
				this.setRight(tn);
			else
				this.getRight().insert(tn);   // otherwise call insert at the right child
		}
	}

	//perform preorder traversal at the calling TreeNode object  NLR
	public void preorder() {
		System.out.print(this.getStoredObj());// output the stored value before traversing both children 
		if (this.getLeft() != null)		// if there is left child continue the traverse left child
			this.getLeft().preorder();
		if (this.getRight() != null)	// if there is right child continue the traverse right child
			this.getRight().preorder();	
	}

	//perform inorder traversal at the calling TreeNode object  LNR
	public void inorder() {
		if (this.getLeft() != null)		// if there is left child continue the traverse left child
			this.getLeft().inorder();
		System.out.print(this.getStoredObj());// output the stored value after traversing left child 
		if (this.getRight() != null)	// if there is right child continue the traverse right child
			this.getRight().inorder();	
	}

	//perform postorder traversal at the calling TreeNode object    LRN
	public void postorder() {
		if (this.getLeft() != null)		// if there is left child continue the traverse left child
			this.getLeft().postorder();
		if (this.getRight() != null)	// if there is right child continue the traverse right child
			this.getRight().postorder();	
		System.out.print(this.getStoredObj());  // after traversing both children output the stored value
	}
}

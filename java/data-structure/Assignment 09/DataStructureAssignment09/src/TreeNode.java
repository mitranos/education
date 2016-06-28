import java.util.ArrayList;


public class TreeNode {
	private int storedObj;	// hold the Golfer object stored in the Tree
	private TreeNode left;		// hold a pointer (memory address) to the left child 
	private TreeNode right;		// hold a pointer (memory address) to the right child
	private TreeNode temp;
	private TreeNode parent;
	private int index = 0;
	private int parentCount = 0;

	// empty constructor
	public TreeNode() {
		setStoredObj(0);
		setLeft(null);
		setRight(null);
	}

	// constructor with a known Golfer object
	public TreeNode(int so) {
		setStoredObj(so);
		setLeft(null);
		setRight(null);
	}

	// definitions of accessors and mutators
	public int getStoredObj() {
		return storedObj;
	}

	public void setStoredObj(int storedObj) {
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
	public void insert(TreeNode tn, ArrayList<TreeNode> list, ArrayList<TreeNode> listParent) { 
		// if new insert value is less than the value at the calling object look left
		if (list.get(index).getStoredObj() + 1 < tn.getStoredObj()){
			if (listParent.get(parentCount).getLeft() == null){  // if null store it there
				listParent.get(parentCount).setLeft(tn);
				list.add(tn);
				listParent.add(tn);
				index++;
				parentCount++;
				temp = tn;
			} else {
				this.getLeft().insert(tn, list, listParent);  // otherwise call insert at the left child
			}
		} else {  // if new insert value is not less than the value at the calling object look right
			if (temp.getRight() == null) {   // if null store it there
				temp.setRight(tn);
				list.add(tn);
				listParent.add(tn);
				index++;
				temp = tn;
			} else {
				temp.getRight().insert(tn, list, listParent);   // otherwise call insert at the right child
			}
		}
	}

	//perform preorder traversal at the calling TreeNode object  NLR
	public void preorder() {
		System.out.println(this.getStoredObj());// output the stored value before traversing both children 
		if (this.getLeft() != null)		// if there is left child continue the traverse left child
			this.getLeft().preorder();
		if (this.getRight() != null)	// if there is right child continue the traverse right child
			this.getRight().preorder();	
	}

	//perform inorder traversal at the calling TreeNode object  LNR
	public void inorder() {
		if (this.getLeft() != null)		// if there is left child continue the traverse left child
			this.getLeft().inorder();
		System.out.println(this.getStoredObj());// output the stored value after traversing left child 
		if (this.getRight() != null)	// if there is right child continue the traverse right child
			this.getRight().inorder();	
	}

	//perform postorder traversal at the calling TreeNode object    LRN
	public void postorder() {
		if (this.getLeft() != null)		// if there is left child continue the traverse left child
			this.getLeft().postorder();
		if (this.getRight() != null)	// if there is right child continue the traverse right child
			this.getRight().postorder();	
		System.out.println(this.getStoredObj());  // after traversing both children output the stored value
	}
}

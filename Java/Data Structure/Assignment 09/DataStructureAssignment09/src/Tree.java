import java.util.ArrayList;


public class Tree {
	private TreeNode root;  	// root of the tree stored here
	private ArrayList<TreeNode> list = new ArrayList<TreeNode>();
	private static ArrayList<TreeNode> listParent = new ArrayList<TreeNode>();

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
		if (root == null){
			root = g;// insert at the root if a root is not there
			list.add(g);
			listParent.add(g);
		}else
			root.insert(g, list, listParent);		// concentrate on inserting at the root
	}

	// do a preorder traversal starting at the root
	public void preorder() {
		if (root == null)		// nothing in the tree
			System.out.println("The tree is empty - nothing to output");
		else {
			System.out.println("The preorder traversal of the tree is:\n");
			printHeader("Preorder");
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
			printHeader("Inorder");
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
			printHeader("Postorder");
			root.postorder();	// print out values at all TreeNodes
			System.out.println();
		}	
	}

	// print out a header for neatly aligned data
	public void printHeader(String order) {
		System.out.println("Printing " + order);
	}
}

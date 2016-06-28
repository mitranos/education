/**
 *
 * File:         TreeProcesser.java
 * Purpose:      Create a Class that processes the two type of Trees.
 * Project:      CSIS 3400 Assignment 08
 *
 * (c) Copyright Salvatore Mitrano 2014 All rights reserved.
 **/
import java.util.ArrayList;
import java.util.Scanner;

public class TreeProcesser {
	private Scanner user_input = new Scanner( System.in );
	private ArrayList<GolfCourse> golfCourseList = new ArrayList<GolfCourse>();
	private Data data = new Data();
	private Tree tree = new Tree();
	private PseudoTree pseudoTree = new PseudoTree();

	TreeProcesser(){
		golfCourseList = data.readFile(golfCourseList);
		treeProcesser();
	}

	private void treeProcesser(){
		//NORMAL LINKED LIST
		for(int i =0; i < golfCourseList.size(); i++){
			tree.insert(new TreeNode(golfCourseList.get(i)));
		}

		//PSEUDO LINKED LIST
		for(int i =0; i < golfCourseList.size(); i++){
			pseudoTree.insert(new PseudoTreeNode(golfCourseList.get(i)));
		}
	}

	public void inorder(){
		System.out.println("********************************************");
		System.out.println("*               NORMAL TREE                *");
		System.out.println("********************************************");

		tree.inorder();

		System.out.println("********************************************");
		System.out.println("*            PSEUDO-LINKED TREE            *");
		System.out.println("********************************************");

		pseudoTree.inorder();
	}

	public void postorder(){
		System.out.println("********************************************");
		System.out.println("*               NORMAL TREE                *");
		System.out.println("********************************************");

		tree.postorder();

		System.out.println("********************************************");
		System.out.println("*            PSEUDO-LINKED TREE            *");
		System.out.println("********************************************");

		pseudoTree.postorder();
	}

	public void preorder(){
		System.out.println("********************************************");
		System.out.println("*               NORMAL TREE                *");
		System.out.println("********************************************");

		tree.preorder();

		System.out.println("********************************************");
		System.out.println("*            PSEUDO-LINKED TREE            *");
		System.out.println("********************************************");

		pseudoTree.preorder();
	}

	public void addNode(){
		System.out.println("Enter The Following Data:");
		System.out.print("Course Name: ");
		String name = user_input.next();
		System.out.print("Designer: ");
		String designer = user_input.next();
		System.out.print("Year Built: ");
		int year = user_input.nextInt();
		System.out.print("Low Greens Fee: ");
		double lowGreensFee = user_input.nextDouble();

		tree.insert(new TreeNode(new GolfCourse(name, null, lowGreensFee, 0, designer, year, 0, 0, 0)));
		pseudoTree.insert(new PseudoTreeNode(new GolfCourse(name, null, lowGreensFee, 0, designer, year, 0, 0, 0)));
	}
}

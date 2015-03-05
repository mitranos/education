/**
 *
 * File:         PseudoTree.java
 * Purpose:      Create a Pseudo-Linked Tree.
 * Project:      CSIS 3400 Assignment 08
 *
 * (c) Copyright Salvatore Mitrano 2014 All rights reserved.
 **/
import java.util.Arrays;

public class PseudoTree {
	private int SIZE = 40;
	private PseudoTreeNode[] array = new PseudoTreeNode[SIZE];
	private int index = 0;


	public void insert(PseudoTreeNode g){
		if(index == SIZE){
			duplicateArraySize(array);
		}else{
			if (array[0] == null)
				array[0] = g;
			else 
				insertNode(0, g);
		}
	}

	private void insertNode(int i, PseudoTreeNode g){
		if(array[i].getStoredObj().getLowGreenFee() > g.getStoredObj().getLowGreenFee()){
			if(array[i].getLeft() == -1){
				index++;
				array[i].setLeft(index);
				array[index] = g;

			} else {
				insertNode(array[i].getLeft(), g);
			}
		} else {
			if(array[i].getRight() == -1){
				index++;
				array[i].setRight(index);
				array[index] = g;
			} else {
				insertNode(array[i].getRight(), g);
			}
		}
	}


	public void preorder() {
		if(array[0] == null)
			System.out.println("The tree is empty - nothing to output");
		else {
			System.out.println("The preorder traversal of the tree is:\n");
			printHeader();
			preorderRecursive(0);
			System.out.println();
		}
	}

	public void inorder() {
		if(array[0] == null)
			System.out.println("The tree is empty - nothing to output");
		else {
			System.out.println("The inorder traversal of the tree is:\n");
			printHeader();
			inorderRecursive(0);
			System.out.println();
		}
	}

	public void postorder() {
		if(array[0] == null)
			System.out.println("The tree is empty - nothing to output");
		else {
			System.out.println("The postorder traversal of the tree is:\n");
			printHeader();
			postorderRecursive(0);
			System.out.println();
		}
	}

	private void preorderRecursive(int i){
		System.out.print(array[i].getStoredObj());	
		if (array[i].getLeft() != -1)
			preorderRecursive(array[i].getLeft());
		if (array[i].getRight() != -1)
			preorderRecursive(array[i].getRight());	
	}

	private void inorderRecursive(int i){
		if (array[i].getLeft() != -1)
			inorderRecursive(array[i].getLeft());
		System.out.print(array[i].getStoredObj());
		if (array[i].getRight() != -1)
			inorderRecursive(array[i].getRight());	
	}

	private void postorderRecursive(int i){
		if (array[i].getLeft() != -1)
			postorderRecursive(array[i].getLeft());
		if (array[i].getRight() != -1)
			postorderRecursive(array[i].getRight());
		System.out.print(array[i].getStoredObj());	
	}

	private void printHeader() {
		System.out.printf("%-50s %-42s %-15s %-15s %n", "Course Name", "Designer", "Year Built", "Low Greens Fee");
		System.out.printf("%-50s %-42s %-15s %-15s %n", "-----------", "--------", "----------", "--------------");
	}

	private void duplicateArraySize(PseudoTreeNode[] array){
		SIZE = array.length * 2;
		array = Arrays.copyOf(array, array.length * 2);
	}
}

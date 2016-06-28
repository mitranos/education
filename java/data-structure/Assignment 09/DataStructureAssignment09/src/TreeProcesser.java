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
	private ArrayList<Integer> integers = new ArrayList<Integer>();
	private Tree tree = new Tree();

	TreeProcesser(){
	}

	private void treeProcesser(){
		//PSEUDO LINKED LIST
		for(int i =0; i < integers.size(); i++){
			tree.insert(new TreeNode(integers.get(i)));
		}
	}

	public void inorder(){
		System.out.println("********************************************");
		System.out.println("*            PSEUDO-LINKED TREE            *");
		System.out.println("********************************************");

		tree.inorder();
	}

	public void postorder(){

		System.out.println("********************************************");
		System.out.println("*            PSEUDO-LINKED TREE            *");
		System.out.println("********************************************");

		tree.postorder();
	}

	public void preorder(){

		System.out.println("********************************************");
		System.out.println("*            PSEUDO-LINKED TREE            *");
		System.out.println("********************************************");

		tree.preorder();
	}

	public void addTree(){
		
		System.out.println("Enter a valid tree one Integer at a time with a space between each integer:");
		String expression = user_input.nextLine();
		
		Scanner parser = new Scanner(expression);
		while (parser.hasNext())
		{
			integers.add(Integer.parseInt(parser.next()));
		}
		treeProcesser();
	}
}

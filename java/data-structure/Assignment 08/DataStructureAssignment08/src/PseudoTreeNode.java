/**
 *
 * File:         PseudoTreeNode.java
 * Purpose:      Create a Pseudo-Linked Tree Node To Store -1 for left and Right and a <GolfCourse> Object.
 * Project:      CSIS 3400 Assignment 08
 *
 * (c) Copyright Salvatore Mitrano 2014 All rights reserved.
 **/
public class PseudoTreeNode {
	private GolfCourse storedObj;
	private int left;		
	private int right;			

	public PseudoTreeNode() {
		setStoredObj(null);
		setLeft(-1);
		setRight(-1);
	}

	public PseudoTreeNode(GolfCourse so) {
		setStoredObj(so);
		setLeft(-1);
		setRight(-1);
	}

	public GolfCourse getStoredObj() {
		return storedObj;
	}

	public void setStoredObj(GolfCourse storedObj) {
		this.storedObj = storedObj;
	}

	public int getLeft() {
		return left;
	}

	public void setLeft(int left) {
		this.left = left;
	}

	public int getRight() {
		return right;
	}

	public void setRight(int right) {
		this.right = right;
	}
}

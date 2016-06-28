/**
*
* File:         Cube.java
* Purpose:      Object to draw a Cube in console.
* Project:      CSIS 3100 Assignment 01
*
* (c) Copyright Salvatore Mitrano 2013 All rights reserved.
**/
public class Cube {
	
	public void printCube() {
		int iRow = 4;
		int iColumns = 4;
		for (int y = iRow; y > 0; y--) {
			for (int i = iColumns; i > 0; --i) {
				System.out.print("*");	
			}
			System.out.println();
		}
	}
}

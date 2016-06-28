/**
*
* File:         HalfTriangle.java
* Purpose:      Object to draw a HalfTriangle in console.
* Project:      CSIS 3100 Assignment 01
*
* (c) Copyright Salvatore Mitrano 2013 All rights reserved.
**/
public class HalfTriangle {
	
	public void printHalfTriangle() {
		int iBase = 5;
		for (int i = 1; i <= iBase; i++) {
		    for (int k=0; k < (iBase - i); k++) {
		        System.out.print(" ");
		    }
		    for (int j=0; j<i; j++) {
		        System.out.print("*");
		    }
		    System.out.println("");
		}
	}
}
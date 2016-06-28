/**
*
* File:         Triangle.java
* Purpose:      Object to draw a Triangle in console.
* Project:      CSIS 3100 Assignment 01
*
* (c) Copyright Salvatore Mitrano 2013 All rights reserved.
**/
public class Triangle {
	
	public void printTriangle() {
		int iBase = 9;
		int iHigh = 5;
		int iSpaces = iBase - iHigh;
		for (int i = 1; i <= iBase; i += 2) {
		    for (int k=0; k < (iSpaces - i / 2); k++) {
		        System.out.print(" ");
		    }
		    for (int j=0; j<i; j++) {
		        System.out.print("*");
		    }
		    System.out.println("");
		}
	}
}

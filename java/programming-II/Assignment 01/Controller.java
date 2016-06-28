/**
*
* File:         Controller.java
* Purpose:      Draw a Cube, Triangle and HalfTriangle in console.
* Project:      CSIS 3100 Assignment 01
*
* Company:      Nova Southeastern University
* Supervisor:   Dr. Raœl Salazar
*
* Author:       Salvatore Mitrano
* History:      Created 8/30/2013
* Assisted by:  none
* References:   none
*
* (c) Copyright Salvatore Mitrano 2013 All rights reserved.
**/
public class Controller {

	public static void main(String[] args) {
		// TODO Auto-generated method stub
		
		//Printing Cube:
		System.out.println("Printing Cube:");
		Cube c = new Cube();
		c.printCube();
		System.out.println();
		
		//Printing triangle:
		System.out.println("Printing Triangle:");
		Triangle t = new Triangle();
		t.printTriangle();
		System.out.println();
		
		//Printing Half Triangle:
		System.out.println("Printing Half Triangle:");
		HalfTriangle ht = new HalfTriangle();
		ht.printHalfTriangle();
	}
}

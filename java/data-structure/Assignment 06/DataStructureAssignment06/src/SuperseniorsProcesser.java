/**
 *
 * File:         SuperseniorProcesser.java
 * Purpose:      Class that handle the process of ordering the list with average.
 * 				 Two methods: Linked List, Array List.
 * Project:      CSIS 3400 Assignment 06
 *
 * (c) Copyright Salvatore Mitrano 2014 All rights reserved.
 **/
import java.util.ArrayList;
import jsjf.*;


public class SuperseniorsProcesser {
	private ArrayList<Supersenior> list = new ArrayList<Supersenior>();
	private LinkedOrderedList<Supersenior> linkedOrderedList = new  LinkedOrderedList<Supersenior>();
	private ArrayOrderedList<Supersenior> arrayOrderedList = new ArrayOrderedList<Supersenior>();
	private Supersenior supersenior;
	private Data data = new Data();
	
	public void processSuperseniors(){
		list = data.readFile(list);
		//Implementing Linked Ordered List
		System.out.println("********************************************");
		System.out.println("*           Linked Ordered List            *");
		System.out.println("********************************************");
		for (int i = 0; i < list.size(); i++)
			linkedOrderedList.add(list.get(i));
		System.out.printf("%-20s  %-3s   %-15s   %-15s%n", "LastName, FirstName ", "Won", "Total Money Won", "Average Money Won");
		for (int i = 0; i <= linkedOrderedList.size(); i++){
			supersenior = (Supersenior) linkedOrderedList.removeFirst();
			System.out.printf("%-20s  %-3s   %-15.2f   %-15.2f%n", supersenior.getName(), supersenior.getNumbTournaments(), supersenior.getTotalMoney(), supersenior.getAverage());
		}
		//Implementing Array Ordered List
		System.out.println("********************************************");
		System.out.println("*            Array Ordered List            *");
		System.out.println("********************************************");
		for (int i = 0; i < list.size(); i++)
			arrayOrderedList.add(list.get(i));
		System.out.printf("%-20s  %-3s   %-15s   %-15s%n", "LastName, FirstName ", "Won", "Total Money Won", "Average Money Won");
		for (int i = 0; i <= arrayOrderedList.size(); i++){
			supersenior = (Supersenior) arrayOrderedList.removeFirst();
			System.out.printf("%-20s  %-3s   %-15.2f   %-15.2f%n", supersenior.getName(), supersenior.getNumbTournaments(), supersenior.getTotalMoney(), supersenior.getAverage());
		}
	}
}

/**
 *
 * File:         SortingProgram.java
 * Purpose:      Sorting program.
 * Project:      CSIS 3400 Assignment 07
 *
 * (c) Copyright Salvatore Mitrano 2014 All rights reserved.
 **/
import java.util.ArrayList;
import java.util.Date;

import sorting.*;

public class SortingProgram {
	private static int SIZE = 100000;
	private static int MAX = 100000;
	private Integer[] list = new Integer[SIZE];
	private Sorting sorting = new Sorting();
	private HeapSort heapSort = new HeapSort();
	private ShellSort shellSort = new ShellSort();
	private Date d1;
	private Date d2;
	private long ellapsedTime;
	
	private Integer[] randomList(Integer[] list){
		list = new Integer[SIZE];
		for (int i = 0; i < SIZE; i++)
			list[i] = ((int)(Math.random()*MAX));
 		return list;
	}
	
	private Integer[] reverseOrderList(Integer[] list){
		list = new Integer[SIZE];
		for (int i = SIZE - 1, j = 0; i >= 0 ; i--, j++)
			list[j] = i;
		return list;
	}
	
	private Integer[] inOrderList(Integer[] list){
		list = new Integer[SIZE];
		for (int i = 0; i < SIZE ; i++)
			list[i] = i;
		return list;
	}
	
	private boolean checkOrdered(Integer[] list){
		for (int i = 0; i < SIZE - 1 ; i++){
			if (list[i] > list[i+1]) 
				return false;
		}
		return true;
	}
	
	private void printArray(Integer[] list){
		for (int i = 0; i < SIZE -1; i++)
			System.out.println(list[i]);
	}
	
	public void selectionSort(){
		System.out.println("Selection Sort sorting an Ordered list, reverse ordered list and an unordered list");
		System.out.println("----------------------------------------------------------------------------------");
		//Ordered
		list = inOrderList(list);
		d1 = new Date();
		Sorting.selectionSort(list);
		d2 = new Date();
		ellapsedTime = d2.getTime() - d1.getTime();
		if (checkOrdered(list))
			System.out.println("The inorderer list has been ordered and it took "
						+ ellapsedTime + " millisecond to complete the Job");
		//Reverse Order
		list = reverseOrderList(list);
		d1 = new Date();
		Sorting.selectionSort(list);
		d2 = new Date();
		ellapsedTime = d2.getTime() - d1.getTime();
		if (checkOrdered(list))
			System.out.println("The reverse order list has been ordered and it took "
						+ ellapsedTime + " millisecond to complete the Job");
		//Unordered
		list = randomList(list);
		d1 = new Date();
		Sorting.selectionSort(list);
		d2 = new Date();
		ellapsedTime = d2.getTime() - d1.getTime();
		if (checkOrdered(list))
			System.out.println("The unordered list has been ordered and it took "
						+ ellapsedTime + " millisecond to complete the Job");
	}
	
	public void heapSort(){
		System.out.println("Heap Sort sorting an Ordered list, reverse ordered list and an unordered list");
		System.out.println("-----------------------------------------------------------------------------");
		//Ordered
		list = inOrderList(list);
		printArray(list);
		d1 = new Date();
		heapSort.HeapSort(list);
		d2 = new Date();
		printArray(list);
		ellapsedTime = d2.getTime() - d1.getTime();
		if (checkOrdered(list))
			System.out.println("The inorderer list has been ordered and it took "
						+ ellapsedTime + " millisecond to complete the Job");
		//Reverse Order
		list = reverseOrderList(list);
		d1 = new Date();
		heapSort.HeapSort(list);
		d2 = new Date();
		ellapsedTime = d2.getTime() - d1.getTime();
		if (checkOrdered(list))
			System.out.println("The reverse order list has been ordered and it took "
						+ ellapsedTime + " millisecond to complete the Job");
		//Unordered
		list = randomList(list);
		d1 = new Date();
		printArray(list);
		heapSort.HeapSort(list);
		d2 = new Date();
		printArray(list);
		ellapsedTime = d2.getTime() - d1.getTime();
		if (checkOrdered(list))
			System.out.println("The unordered list has been ordered and it took "
						+ ellapsedTime + " millisecond to complete the Job");
	}
	
	public void shellSort(){
		System.out.println("Shell Sort sorting an Ordered list, reverse ordered list and an unordered list");
		System.out.println("-----------------------------------------------------------------------------");
		//Ordered
		list = inOrderList(list);
		d1 = new Date();
		shellSort.shellSort(list);
		d2 = new Date();
		ellapsedTime = d2.getTime() - d1.getTime();
		if (checkOrdered(list))
			System.out.println("The inorderer list has been ordered and it took "
						+ ellapsedTime + " millisecond to complete the Job");
		//Reverse Order
		list = reverseOrderList(list);
		d1 = new Date();
		shellSort.shellSort(list);
		d2 = new Date();
		ellapsedTime = d2.getTime() - d1.getTime();
		if (checkOrdered(list))
			System.out.println("The reverse order list has been ordered and it took "
						+ ellapsedTime + " millisecond to complete the Job");
		//Unordered
		list = randomList(list);
		d1 = new Date();
		shellSort.shellSort(list);
		d2 = new Date();
		ellapsedTime = d2.getTime() - d1.getTime();
		if (checkOrdered(list))
			System.out.println("The unordered list has been ordered and it took "
						+ ellapsedTime + " millisecond to complete the Job");
	}
	
	public void mergeSort(){
		System.out.println("Merge Sort sorting an Ordered list, reverse ordered list and an unordered list");
		System.out.println("----------------------------------------------------------------------------------");
		//Ordered
		list = inOrderList(list);
		d1 = new Date();
		Sorting.mergeSort(list);
		d2 = new Date();
		ellapsedTime = d2.getTime() - d1.getTime();
		if (checkOrdered(list))
			System.out.println("The inorderer list has been ordered and it took "
						+ ellapsedTime + " millisecond to complete the Job");
		//Reverse Order
		list = reverseOrderList(list);
		d1 = new Date();
		Sorting.mergeSort(list);
		d2 = new Date();
		ellapsedTime = d2.getTime() - d1.getTime();
		if (checkOrdered(list))
			System.out.println("The reverse order list has been ordered and it took "
						+ ellapsedTime + " millisecond to complete the Job");
		//Unordered
		list = randomList(list);
		d1 = new Date();
		Sorting.mergeSort(list);
		d2 = new Date();
		ellapsedTime = d2.getTime() - d1.getTime();
		if (checkOrdered(list))
			System.out.println("The unordered list has been ordered and it took "
						+ ellapsedTime + " millisecond to complete the Job");
	}
}

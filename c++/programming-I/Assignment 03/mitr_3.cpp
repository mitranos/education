/**
 *
 * File:         mitr_3.cpp
 * Purpose:      Demonstrate ability to Conditionals
 *
 * Project:      CSIS 2100 Assignment 03
 * Company:      Nova Southeastern University
 * Supervisor:   Dr. Michael Van Hilst
 *
 * Author:       Salvatore Mitrano
 * History:      Created 1/16/2013
 * Assisted by:  none
 * References:   none
 *
 * (c) Copyright Salvatore Mitrano 2012 All rights reserved.
 ***/
#include <iostream>

using namespace std;

int main(){
	int iValue1;
	int iValue2;
	int iValue3;
	int iResult;
	cout << "I'm going to print the smallest integer number of 3 that you will enter!" << endl;
	cout << "Enter 1st number: ";
	cin >> iValue1;
	cout << "Enter 2nd number: ";
	cin >> iValue2;
	cout << "Enter 3rd number: ";
	cin >> iValue3;
	if ((iValue1 <= iValue2) && (iValue1 <= iValue3))
		iResult = iValue1;
	else if ((iValue2 <= iValue1) && (iValue2 <= iValue3))
		iResult = iValue2;
	else
		iResult = iValue3;
	cout << "The smallest value among " << iValue1 << ", " << iValue2 << " and " << iValue3 << " is " << iResult << endl;
	return 0;
}

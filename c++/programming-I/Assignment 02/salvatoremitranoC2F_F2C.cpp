/**
 *
 * File:         salvatoremitranoC2F_F2C.cpp
 * Purpose:      Fahrenheit/Celcius Conversion.
 * Project:      CSIS 2100 Assignment 02
 *
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
	char charUnits;
	double degreeInCelsius;
	double degreenInFahrenheit;
	cout << "I will convert temperatures for you" << endl;
	cout << "Choose the temperature you want to convert to."<< endl;
	do{
		cout << "Input F for Fahrenheit, C for Celsius or E for exit: ";
		cin >> charUnits;
		if (charUnits == 'F'){
			cout << "I will convert Fahrenheit temperature to Celsius" << endl;
			cout << "Enter a temperature in Fahrenheit: ";
			cin >> degreenInFahrenheit;
			degreeInCelsius =  (degreenInFahrenheit - 32) * 5/9;
			cout << degreenInFahrenheit << " degrees Farenheit is " 
				<< degreeInCelsius << " degrees Celsius." << endl;
		} else if(charUnits == 'C'){
			cout << "I will convert Celsius to Fahrenheit." << endl;
			cout << "Enter a temperature in Celsius: ";
			cin >> degreeInCelsius;
			degreenInFahrenheit = degreeInCelsius * 9 / 5 + 32;
			cout << degreeInCelsius << " degrees Celsius is " 
				<< degreenInFahrenheit << " degrees Fahrenheit." << endl;
		}else if(charUnits == 'E'){
			cout << "Thanks for using the converter." << endl;
			cout << "(c) Copyright Salvatore Mitrano 2012 All rights reserved." << endl;
		}else{
			cout << "You input was neither Celsius nor Fahrenheit nor exit." << endl;
		}
	} while (charUnits != 'E');
	return 0;
}

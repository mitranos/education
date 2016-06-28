/**
 *
 * File:         mitranoTime.cpp
 * Purpose:      Create Time class with Conversion.
 * Project:      CSIS 2100 Assignment 15
 *
 * Company:      Nova Southeastern University
 * Supervisor:   Dr. Michael Van Hilst
 *
 * Author:       Salvatore Mitrano
 * History:      Created 4/03/2013  Modified 4/06/2013
 * Assisted by:  none
 * References:   none
 *
 * (c) Copyright Salvatore Mitrano 2013 All rights reserved.
 **/
#include <iostream>
#include <string>
#include "Time.h"
using namespace std;

int main(){
	Time departureTime;
	Time arrivalTime;
	string sArrival;
	bool check;
	check = departureTime.setAsString("11:15 am");
	if (check)
		cout << "The Time has been set.\n";
	else
		cout << "Setting time has failed\n";
	arrivalTime.setHour(05);
	arrivalTime.setMinutes(30);
	arrivalTime.setAfternoon(false);
	int hour = departureTime.getHour();
	int minutes = departureTime.getMinutes();
	string ampm = departureTime.getAfternoon();
	cout << hour << ":" << minutes  << " " << ampm << endl;
	sArrival = arrivalTime.getAsString(); // "5:30 pm"
	cout << sArrival << endl;
	check = arrivalTime.test();
	//char letter = sArrival[1];
	return 0;
}

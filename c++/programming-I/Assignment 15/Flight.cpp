/**
 *
 * File:         Flight.cpp
 * Purpose:      Flight Class as Object.
 * Project:      CSIS 2100 Assignment 15
 *
 * Company:      Nova Southeastern University
 * Supervisor:   Dr. Michael Van Hilst
 *
 * Author:       Salvatore Mitrano
 * History:      Created 3/17/2013  Modified 4/1/2013
 * Assisted by:  none
 * References:   none
 *
 * (c) Copyright Salvatore Mitrano 2013 All rights reserved.
 **/
#include <iostream>
#include <string>
#include "Flight.h"
using namespace std;


Flight::Flight(void)
{
    iFlightNumber = 0;
    sDestination = "";
    sDeparture = "";
    sGate = "";
	iMonth = 0;
	iDate = 0;
}

Flight::~Flight(void)
{
}

void Flight::set(int flightNumber, string destination, string departure, string gate, int month, int date)
{
    iFlightNumber = flightNumber;
    sDestination = destination;
    sDeparture = departure;
    sGate = gate;
	iMonth = month;
	iDate = date;
}

void Flight::describe()
{
    cout << "Flight " << iFlightNumber << " for " << sDestination << " leaving at "
    << sDeparture << " from gate " << sGate << endl;
}

int Flight::getMonth()
{
	return iMonth;
}

int Flight::getDate()
{
	return iDate;
}

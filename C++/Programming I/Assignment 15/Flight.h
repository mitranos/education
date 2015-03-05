/**
 *
 * File:         Flight.h
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
#pragma once
#include <iostream>
#include <string>
using namespace std;

class Flight {
private:
    int iFlightNumber;
    string sDestination;
    string sDeparture;
    string sGate;
	int iMonth;
	int iDate;
    
public:
    Flight(void);
    ~Flight(void);
    void set(int flightNumber, string destination, string departure, string gate, int month, int date);
    void describe();
	int getMonth();
	int getDate();
}; 

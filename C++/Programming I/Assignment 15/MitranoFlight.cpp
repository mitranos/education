/**
 *
 * File:         MitranoFlight.cpp
 * Purpose:      Flight Class as Object.
 * Project:      CSIS 2100 Assignment 15
 *
 * Company:      Nova Southeastern University
 * Supervisor:   Dr. Michael Van Hilst
 *
 * Author:       Salvatore Mitrano
 * History:      Created 3/17/2013 Modified 4/1/2013
 * Assisted by:  none
 * References:   none
 *
 * (c) Copyright Salvatore Mitrano 2013 All rights reserved.
 **/
#include <iostream>
#include "Flight.h"
using namespace std;

void runTravel() {
    Flight leg[3];
    // flight #, destination, departure time, gate, month, date
    leg[0].set(225, "Rome", "8:00 am", "B12", 4, 21);
	leg[1].set(16, "Vienna", "11:30 am", "A5", 4, 21);
	leg[2].set(27, "Moscow", "4:15 pm", "C9", 4, 21);
    cout << "Here is your itinerary beginning on "
		<< leg[0].getMonth() << "/" << leg[0].getDate() << ":\n";
    for (int i = 0; i < 3; i++ )
        leg[i].describe();
    // Flight 225 for Rome leaving at 10:30 am from gate B12.
}


int main() {
    runTravel();
    return 0;
}

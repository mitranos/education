/**
 *
 * File:         mitranoVisitor.cpp
 * Purpose:      Create a Vistior Class.
 * Project:      CSIS 2100 Assignment 17
 *
 * Company:      Nova Southeastern University
 * Supervisor:   Dr. Michael Van Hilst
 *
 * Author:       Salvatore Mitrano
 * History:      Created 4/10/2013
 * Assisted by:  none
 * References:   none
 *
 * (c) Copyright Salvatore Mitrano 2013 All rights reserved.
 **/
#include <iostream>
#include <string>
#include "Visitor.h"
using namespace std;

void speakEnglish(Visitor *english);
void speakDutch(Visitor *english);
void speakSpanish(Visitor *english);

int main() {
	Visitor visitor1;
	Visitor visitor2;
    Visitor visitor3;
	visitor1.setName("Mary");
	visitor2.setName("Jaap.");
    visitor3.setName("Carlos");
	speakEnglish(&visitor1);
	speakDutch(&visitor2);
    speakSpanish(&visitor3);
    cout << "Time for bed." << endl;
    visitor1.greetNight();
	visitor2.greetNight();
    visitor3.greetNight();
    cout << "Breakfast time." << endl;
	visitor1.greetMorning();
	visitor2.greetMorning();
    visitor3.greetMorning();
	return 0;
}

void speakEnglish(Visitor *english)
{
	english->setMorning("Good Morning");
	english->setNight("Good Night");
}

void speakDutch(Visitor *dutch)
{
	dutch->setMorning("Gutermorgen");
	dutch->setNight("Slaap lekker");
}

void speakSpanish(Visitor *spanish)
{
	spanish->setMorning("Buenos dias");
	spanish->setNight("Buena noches");
}
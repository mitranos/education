/**
 *
 * File:         Visitor.h
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
#pragma once
#include <iostream>
#include <string>
using namespace std;

class Visitor {
private:
	string name;
	string morning;
	string night;
public:
	Visitor(void);
	~Visitor(void);
	void setName(string sName);
	void setMorning(string sMorning);
	void setNight(string sNight);
	void greetMorning();
	void greetNight();
};

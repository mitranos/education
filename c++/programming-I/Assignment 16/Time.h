/**
 *
 * File:         Time.h
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
#include <sstream>
using namespace std;
#pragma once

class Time {
private:
	int iMinutes;
	int iHour;
	bool afternoon;
	string sAmPm;
	string intToString(int iInteger);
	int getMinuteParse(string time);
	int getHourParse(string time);
	string getAmPmParse(string time);
	bool checkTime(string time);
public:
	Time(void);
    ~Time(void);
	void setMinutes(int minutes);
	void setHour(int hour);
	void setAfternoon(bool ampm);
	int getMinutes();
	int getHour();
	string getAfternoon();
	string getAsString();
	bool setAsString(string time);
	bool test();
};
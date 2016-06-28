/**
 *
 * File:         Time.cpp
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
#include "Time.h"

Time::Time(void)
{
	iMinutes = 0;
	iHour = 0;
	afternoon = false;
	sAmPm = "";
}

Time::~Time(void)
{
    
}

void Time::setMinutes(int minutes)
{
	iMinutes = minutes;
}

void Time::setHour(int hour)
{
	iHour = hour;
}

void Time::setAfternoon(bool ampm)
{	
	afternoon = ampm;
	if (afternoon)	
		sAmPm = "pm";
	else
		sAmPm = "am";
}

int Time::getMinutes()
{
	return iMinutes;
}

int Time::getHour()
{
	return iHour;
}

string Time::getAfternoon()
{
	return sAmPm;
}

string Time::getAsString()
{
	string sMinutes, sHour;
	sMinutes = intToString(iMinutes);
	sHour = intToString(iHour);
	return sHour + ":" + sMinutes + " " + sAmPm; 
}

string Time::intToString(int iInteger) {
    string sString;
    ostringstream convert;
    convert << iInteger;
    sString = convert.str();
    return sString;
}

bool Time::setAsString(string time) 
{	
	if (checkTime(time)) {
		iHour = getHourParse(time);
		iMinutes = getMinuteParse(time);
		sAmPm = getAmPmParse(time);
		return true;
	} else {
		return false;	
	}
}

int Time::getHourParse(string time)
{
	string sHour = "";
	int iHour;
	for(int i = 0; time[i] != ':'; i++)
		sHour = sHour + time[i];
	istringstream ( sHour ) >> iHour;
	return iHour;
}

int Time::getMinuteParse(string time)
{
	string sMinutes;
	int iMinutes;
	int colonPosition = time.find(":");
	for(int i = colonPosition + 1; time[i] != ' '; i++)
		sMinutes = sMinutes + time[i];
	istringstream ( sMinutes ) >> iMinutes;
	return iMinutes;
}

string Time::getAmPmParse(string time)
{
	string ampm;
	int spacePosition = time.find(" ");
	int size = time.size();
	for(int i = spacePosition + 1; i < size; i++)
		ampm = ampm + time[i];
	return ampm;
}

bool Time::checkTime(string time)
{
	int colonPosition = time.find(":");
    int lastColonPosition = time.find_last_of(":");
	int spacePosition = time.find(" ");
    int lastSpacePosition = time.find_last_of(" ");
    if (lastColonPosition != colonPosition || lastSpacePosition != spacePosition) {
        cout << "The Time string as multiple colon or multiple space." << endl;
        cout << "Time shoul be a specific format: '11:07 am'" << endl;
        return false;
    }
	else if (colonPosition == -1 || spacePosition == -1) {
		cout << "The Time string is missing a colon or a space." << endl;
        cout << "Time shoul be a specific format: '11:07 am'" << endl;
		return false;
	} else {
		for(int i = 0; time[i] != ' '; i++) {
			char c = time[i];
			if((c < '0' || c > '9') && c != ':'){
				cout << "The Time string has invalid characters." << endl;
				return false;
			}
		}
		int hour = getHourParse(time);
		if (hour < 0 || hour > 12){
			cout << "The Time string has invalid hours numbers." << endl;
            cout << "Hour should be between 0 and 12." << endl;
			return false;
		}
		int minutes = getMinuteParse(time);
		if (minutes < 0 || minutes > 59) {
			cout << "The Time has invalid minutes numbers." << endl;
            cout << "Minutes should be between 0 and 59." << endl;
			return false;
		}
		string ampm = getAmPmParse(time);
		if (!(ampm == "am" || ampm == "pm")) {
			cout << "The time has invalid am/pm time." << endl;
            cout << "am or pm should be all lower-case." << endl;
			return false;
		}
	}
	return true;
}

bool Time::test()
{
	bool result = true;
    iMinutes = 11;
	iHour = 11;
	afternoon = true;
	sAmPm = "pm";
    string test;
    test = getAsString();
    if (test != "11:11 pm"){
        cout << "The test getAsString() has failed." << endl;
        result = false;
    }
    iMinutes = 0;
	iHour = 0;
	afternoon = false;
	sAmPm = "";
	bool check = setAsString("11:11 pm");
	if (!check)
		result = false;
	bool check2 = setAsString("1:11pm");
	if (!check2)
		result = false;
	return result;
}
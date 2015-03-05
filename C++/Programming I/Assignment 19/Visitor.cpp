/**
 *
 * File:         Visitor.cpp
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
#include "Visitor.h"

Visitor::Visitor(void)
{
	name = "";
	morning = "";
	night = "";
}

Visitor::~Visitor(void)
{

}

void Visitor::setName(string sName)
{
	name = sName;
}

void Visitor::setMorning(string sMorning)
{
	morning = sMorning;
}

void Visitor::setNight(string sNight)
{
	night = sNight;
}

void Visitor::greetMorning()
{
	cout << morning << " " << name << endl;
}

void Visitor::greetNight()
{
	cout << night << " " << name << endl;
}

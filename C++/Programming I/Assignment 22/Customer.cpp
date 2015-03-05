/**
 *
 * File:         Customer.cpp
 * Purpose:      Implementing Bank Account - Part Three.
 * Project:      CSIS 2100 Assignment 22
 *
 * Company:      Nova Southeastern University
 * Supervisor:   Dr. Michael Van Hilst
 *
 * Author:       Salvatore Mitrano
 * History:      Created 4/01/2013
 * Assisted by:  none
 * References:   none
 *
 * (c) Copyright Salvatore Mitrano 2013 All rights reserved.
 **/
#include "Customer.h"

Customer::Customer(string name)
{
	this->name = name;
}

Customer::~Customer(void)
{

}

void Customer::setAddress(string address)
{
	this->address = address;
}

void Customer::display()
{
	cout << name << endl;
	cout << address << endl;
}

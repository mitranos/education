/**
 *
 * File:         Customer.h
 * Purpose:      Implementing Bank Account - Part One.
 * Project:      CSIS 2100 Assignment 20
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
#pragma once
#include <iostream>
#include <string>
using namespace std;

class Customer {
	string name;
	string address;
public:
	Customer(string name);
	~Customer(void);
	void setAddress(string address);
	void display();
};

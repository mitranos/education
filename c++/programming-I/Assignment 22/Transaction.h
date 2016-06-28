/**
 *
 * File:         Transaction.h
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
#pragma once
#include <iostream>
#include <iomanip>
#include <string>
using namespace std;


class Transaction {
	int dayOfMonth;
	double amount;
	string description;
public:
	Transaction(int dayOfMonth, double amount, string description);
	double getAmount();
	void display();
};

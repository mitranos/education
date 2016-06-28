/**
 *
 * File:         Transaction.cpp
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
#include "Transaction.h"

Transaction::Transaction(int dayOfMonth, double amount, string description)
{
	this->dayOfMonth = dayOfMonth;
	this->amount = amount;
	this->description = description;
}

double Transaction::getAmount()
{
	return amount;
}

void Transaction::display()
{
	cout << setw(3) << dayOfMonth << " " << setw(7) << amount << " " << description << endl;
}

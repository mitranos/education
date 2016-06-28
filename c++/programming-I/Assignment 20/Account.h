/**
 *
 * File:         Account.h
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
#include "Customer.h"

class Account {
	double balance;
	Customer* holder;
public:
	Account(void);
	bool deposit(double amount);
	bool withdraw(double amount);
	double getBalance();
	void setHolder(Customer* holder);
	void displayHolder();
};

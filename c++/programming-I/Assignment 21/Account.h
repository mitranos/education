/**
 *
 * File:         Account.h
 * Purpose:      Implementing Bank Account - Part Two.
 * Project:      CSIS 2100 Assignment 21
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
#include "Transaction.h"

class Account {
	static const int MAX_TRANSACTIONS = 100;
	double balance;
	Customer* holder;
	Transaction* events[MAX_TRANSACTIONS];
	int numEvents;
	bool deposit(double amount);
	bool withdraw(double amount);
public:
	Account(void);
	bool deposit(double amount, int dayOfMonth);
	bool withdraw(double amount, int dayOfMonth, string description);
	double getBalance();
	void setHolder(Customer* holder);
	void displayHolder();
	void displayTransactions();
};

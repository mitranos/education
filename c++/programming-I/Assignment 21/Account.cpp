/**
 *
 * File:         Account.cpp
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
#include "Account.h"

Account::Account(void)
{
	balance = 0.0;
	numEvents = 0;
}

bool Account::deposit(double amount)
{
	if (amount > 0){
		balance += amount;
		return true;
	}
	return false;
}

bool Account::withdraw(double amount)
{
	if ((amount > 0) && (amount <= balance)){
		balance -= amount;
		return true;
	}
	return false;
}

double Account::getBalance()
{
	return balance;
}

void Account::setHolder(Customer* holder) 
{
	this->holder = holder;
}

void Account::displayHolder()
{
	holder->display();
}

bool Account::deposit(double amount, int dayOfMonth)
{
	if ((numEvents < MAX_TRANSACTIONS) && deposit(amount)) {
			events[numEvents] = new Transaction(dayOfMonth, amount, "deposit");
        numEvents++;
		return true;
	}
	return false;
}

bool Account::withdraw(double amount, int dayOfMonth, string description)
{
	if ((numEvents < MAX_TRANSACTIONS) && withdraw(amount)) {
			events[numEvents] = new Transaction(dayOfMonth, -amount, description);
        numEvents++;
		return true;
	}
	return false;
}

void Account::displayTransactions()
{
	for(int i = 0; i < numEvents; ++i) {
		events[i]->display();
	}
}

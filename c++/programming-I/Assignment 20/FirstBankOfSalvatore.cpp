/**
 *
 * File:         FirstBankOfSalvatore.cpp
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
#include <iostream>
#include "Customer.h"
#include "Account.h"
using namespace std;

int main() {
    Customer person1("Mike Van Hilst");
    Customer person2("Sponge Bob");
    person1.setAddress("1600 Pennsylvania Avenue");
    person2.setAddress("124 Conch Street");
    person1.display();
	person2.display();
	Account account1;
	account1.setHolder(&person2);
	cout << account1.deposit(100) << endl;
	cout << account1.withdraw(1000) << endl;
	cout << account1.withdraw(50) << endl;
	cout << account1.getBalance() << endl;
	account1.displayHolder();
	return 0;
}

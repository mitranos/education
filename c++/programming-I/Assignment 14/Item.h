/**
 *
 * File:         Item.h
 * Purpose:      Inventory Item as Object using a Constructor.
 * Project:      CSIS 2100 Assignment 14
 *
 * Company:      Nova Southeastern University
 * Supervisor:   Dr. Michael Van Hilst
 *
 * Author:       Salvatore Mitrano
 * History:      Created 3/17/2013
 * Assisted by:  none
 * References:   none
 *
 * (c) Copyright Salvatore Mitrano 2013 All rights reserved.
 **/
#pragma once
#include <iostream>
#include <string>
using namespace std;

class Item {
private:
    double price;
    int weight;
    string detail;
    int quantity;
    
public:
    Item(void);
    Item(double dPrice, int iWeight, string sDetail);
    ~Item(void);
    void setQuantity(int iQuantity);
    void printDetails();
    double getTotalPrice();
    int getTotalWeight();
}; 

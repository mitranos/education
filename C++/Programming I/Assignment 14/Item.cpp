/**
 *
 * File:         Item.cpp
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
#include <iostream>
#include <string>
#include "Item.h"
using namespace std;


Item::Item(void)
{
    price = 0;
    weight = 0;
    detail = "";
    quantity = 0;
}

Item::Item(double dPrice, int iWeight, string sDetail) 
{
    price = dPrice;
    weight = iWeight;
    detail = sDetail;
    quantity = 1;
}

Item::~Item(void) 
{
}

void Item::setQuantity(int iQuantity)
{
    quantity = iQuantity;
}

void Item::printDetails()
{
    cout << price << " each for " << quantity << " " << detail << endl;
}

double Item::getTotalPrice()
{
    return quantity * price;
}

int Item::getTotalWeight()
{
    return quantity * weight;
}

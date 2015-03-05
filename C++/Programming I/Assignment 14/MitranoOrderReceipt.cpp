/**
 *
 * File:         MitranoOrderReceipt.cpp
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

int main() {
    double dTotalPrice = 0.0;
    int iTotalWeight = 0;
    Item itmMouse(24.99, 14, "Wirless Mouse");
    Item itmKeyboard(22.49, 27, "USB Keyboard");
    Item itmHDMI(24.99, 12, "HDMI cable");
    Item itmGlasses(7.99, 7, "Reading Glasses");
    itmGlasses.setQuantity(2);
    //Details of the order using printDetails()
    cout << "here are your shopping cart.\n";
    itmMouse.printDetails();
    itmKeyboard.printDetails();
    itmHDMI.printDetails();
    itmGlasses.printDetails();
    cout << endl;
    //compute total order price using getTotalPrice()
    dTotalPrice += itmMouse.getTotalPrice();
    dTotalPrice += itmKeyboard.getTotalPrice();
    dTotalPrice += itmHDMI.getTotalPrice();
    dTotalPrice += itmGlasses.getTotalPrice();
    //compute toatal weight using getTotalweight()
    iTotalWeight += itmMouse.getTotalWeight();
    iTotalWeight += itmKeyboard.getTotalWeight();
    iTotalWeight += itmHDMI.getTotalWeight();
    iTotalWeight += itmGlasses.getTotalWeight();
    cout << "The price of your order is $" << dTotalPrice << endl;
    cout << "The weight is " << iTotalWeight << " ounces" << endl;
    cout << "That is " << iTotalWeight / 16.0 << "pounds" << endl;
    return 0;
}

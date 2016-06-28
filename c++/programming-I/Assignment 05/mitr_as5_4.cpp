/**
 *
 * File:         mitr_as5_4.cpp
 * Purpose:      Demonstrate ability to use Conditionals - Part4.
 * Project:      CSIS 2100 Assignment 05.
 * Company:      Nova Southeastern University
 * Supervisor:   Dr. Michael Van Hilst
 *
 * Author:       Salvatore Mitrano
 * History:      Created 1/15/2013 modified 1/28/2013
 * Assisted by:  none
 * References:   none
 *
 * (c) Copyright Salvatore Mitrano 2012 All rights reserved.
 ***/
#include <iostream>

using namespace std;

int main(){
    int iVal = -999;
    cout << "Enter an integer between 1 and 20 (including 1 and 20):";
    cin >> iVal;
    if(cin.fail() || iVal == -999)
        cout << "Idiot!Your input could not be read as a number. Get a life!" << endl;
    else if((iVal < 1) || (iVal > 20))
        cout << "The value you entered is not between 1 and 20." << endl;
    else if((iVal == 8) || (iVal == 11) || (iVal == 18))
        cout << "You entered an " << iVal << endl;
    else
        cout << "You entered a "<< iVal << endl;
    return 0;
}

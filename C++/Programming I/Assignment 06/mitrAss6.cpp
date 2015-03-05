/**
 *
 * File:         mitrAss6.cpp
 * Purpose:      Demonstrate ability to use Loops.
 * Project:      CSIS 2100 Assignment 06
 * Company:      Nova Southeastern University
 * Supervisor:   Dr. Michael Van Hilst
 *
 * Author:       Salvatore Mitrano
 * History:      Created 1/30/2013
 * Assisted by:  none
 * References:   none
 *
 * (c) Copyright Salvatore Mitrano 2012 All rights reserved.
 **/
#include <iostream>
using namespace std;

// Function declration or function prototypes.
void ten2one();
void hundredByFives();
void countDown( int );
void countUp( int );

int main() {
    ten2one();
    hundredByFives();
    countDown(10);
    countUp(10);
    return 0;
}


void ten2one() {
    for (int i = 10; i > 0; i--) {
        cout << i << " ";
    }
    cout << endl;
}

void hundredByFives() {
    int iConstant = 100;
    int i = 0;
    while (i < iConstant) {
        i = i+5;
        if (i == iConstant)
            cout << i;
        else
            cout << i << ",";       
    }
    cout << endl;
}

void countDown( int iParam ) {
    for (int i = iParam; i >= 0; i--) {
        cout << i << " ";
    }
    cout << endl;

}

void countUp( int iParam ) {
    for (int i = 1; i <= iParam; i++) {
        cout << i << " ";
    }
    cout << endl;
}

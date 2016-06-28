/**
 *
 * File:         mitranoOrder.cpp
 * Purpose:      Basics of Pointers.
 * Project:      CSIS 2100 Assignment 17
 *
 * Company:      Nova Southeastern University
 * Supervisor:   Dr. Michael Van Hilst
 *
 * Author:       Salvatore Mitrano
 * History:      Created 4/10/2013
 * Assisted by:  none
 * References:   none
 *
 * (c) Copyright Salvatore Mitrano 2013 All rights reserved.
 **/
#include <iostream>
using namespace std;

void putInOrder(int*, int*);

int main() {
    int x = 6;
    int y = 2;
    cout << x << " " << y << endl; // prints 6 2
    putInOrder(&x, &y);
    cout << x << " " << y << endl; // prints 2 6
    putInOrder(&x, &y);
    cout << x << " " << y << endl; // prints 2 6
    return 0;
}

void putInOrder(int *x, int *y) {
    if (*x > *y) {
        int tmp = *x;
        *x = *y;
        *y = tmp;
    }
}
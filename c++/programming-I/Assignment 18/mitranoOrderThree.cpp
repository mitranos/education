/**
 *
 * File:         mitranoOrderThree.cpp
 * Purpose:      Smallest of Three, and sort.
 * Project:      CSIS 2100 Assignment 18
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

int putInOrder(int*, int*, int*);
void putInOrderTwo(int*,int*);

int main() {
    int x = 6;
    int y = 2;
    int z = 4;
    int smallest = 0;
    
    cout << x << " " << y << " " << z << endl;// prints 6 2 4
    smallest = putInOrder(&x,&y,&z);
    cout << x << " " << y << " " << z << endl;// prints 2 4 6
    cout << smallest << endl; // prints 2
    return 0;
}

int putInOrder(int *iValue1, int *iValue2, int *iValue3) {
    int iResult;
    int tmp;
    if ((*iValue1 <= *iValue2) && (*iValue1 <= *iValue3)) {
        iResult = *iValue1;
        putInOrderTwo(iValue2, iValue3 );
    }
    else if ((*iValue2 <= *iValue1) && (*iValue2 <= *iValue3)) {
        iResult = *iValue2;
        tmp = *iValue2;
        *iValue2 = *iValue1;
        putInOrderTwo(iValue2, iValue3);
        *iValue1 = tmp;
        
    }
    else {
        iResult = *iValue3;
        tmp = *iValue3;
        *iValue3 = *iValue1;
        putInOrderTwo(iValue2, iValue3);
        *iValue1 = tmp;
    }
    return iResult;
}

void putInOrderTwo(int *x, int *y) {
    if (*x > *y) {
        int tmp = *x;
        *x = *y;
        *y = tmp;
    }
}
/**
 *
 * File:         mitrDiamond.cpp
 * Purpose:      Draw a Diamond in console.
 * Project:      CSIS 2100 Assignment 07
 *
 * Company:      Nova Southeastern University
 * Supervisor:   Dr. Michael Van Hilst
 *
 * Author:       Salvatore Mitrano
 * History:      Created 1/29/2013 Modified 3/17/2013
 * Assisted by:  none
 * References:   none
 *
 * (c) Copyright Salvatore Mitrano 2013 All rights reserved.
 **/
#include <iostream>
using namespace std;

void outputSpaces(int);
void outputDiamondLines(char, int, int);
void outputDiamond(char, int);


int main() {
    const int MAX_DIAMOND = 21;
    char cLetter;
    int iNumber;
    int iOdd;
    cout << "Enter a character, and a length (eg. x 7): ";
    cin >> cLetter >> iNumber;
    iOdd = iNumber % 2;
    if ((iOdd == 1) && (iNumber > 0) && (iNumber <= MAX_DIAMOND)) {
        outputDiamond(cLetter,iNumber);
    } else {
        cout << "You have entered an illegal value." << endl;
        cout << "The length must be an odd number between 1 and 21." << endl;
    }
    return 0;
}


void outputSpaces( int iCount ) {
    for (int i = 0; i < iCount; i++) {
        cout << " ";
    }
}


void outputDiamondLines( char cLetter, int iNumberleftSpaces, int iNumberMidSpaces ) {
    if (iNumberMidSpaces == 0) {
        outputSpaces(iNumberleftSpaces);
        cout << cLetter;
    } else {
        outputSpaces(iNumberleftSpaces);
        cout << cLetter;
        outputSpaces(iNumberMidSpaces);
        cout << cLetter;
    }
}


void outputDiamond( char cLetter, int iSize ) {
    int iLeftSpace = (iSize - 1) / 2 ;
    int iMidSpace  = 0;
    while ( iLeftSpace > 0 ) {
        outputDiamondLines(cLetter, iLeftSpace, iMidSpace);
        cout << endl;
        if (iMidSpace == 0)
            iMidSpace = iMidSpace + 1;
        else
            iMidSpace = iMidSpace + 2;
        iLeftSpace--;
    }
    
    iLeftSpace = 0;
    int halfDistance;
    if (iSize == 1) {
        halfDistance = 0;
        iMidSpace = 0;
    } else {
        halfDistance = iSize / 2;
        iMidSpace  = iSize - 2 ;
    }
    do {
        outputDiamondLines(cLetter, iLeftSpace, iMidSpace);
        cout << endl;
        if (iMidSpace == 1)
            iMidSpace = iMidSpace - 1;
        else
            iMidSpace = iMidSpace - 2;
        iLeftSpace++;
    } while ( iLeftSpace <= halfDistance );
}
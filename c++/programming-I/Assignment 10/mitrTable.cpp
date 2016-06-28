/**
 *
 * File:         mitrTable.cpp
 * Purpose:      Create a Table COntent Display.
 * Project:      CSIS 2100 Assignment 06
 *
 * Company:      Nova Southeastern University
 * Supervisor:   Dr. Michael Van Hilst
 *
 * Author:       Salvatore Mitrano
 * History:      Created 1/29/2013 Modified 2/20/2013
 * Assisted by:  none
 * References:   none
 *
 * (c) Copyright Salvatore Mitrano 2013 All rights reserved.
 **/
#include <iostream>
#include <string>
#include <sstream>
using namespace std;

void printChapterLine(int, string, int);
void printSectionLine(int, string, int);
void dots(int);
int countChar(int);
string intToString(int);
void helper();



int main() {
    string sCh1Name = "Introduction";
    string sCh2Name = "Using Variables";
    string sCh3Name = "Using If Statements";
    string sSec3_1Name = "If";
    string sSec3_2Name = "Else";
    printChapterLine(1, sCh1Name, 1);
    printChapterLine(2, sCh2Name, 18);
    printChapterLine(3, sCh3Name, 29);
    printSectionLine(1, sSec3_1Name, 30);
    printSectionLine(2, sSec3_2Name, 37);
    helper();
    return 0;
}


void printChapterLine( int iChLine,  string sTitle, int iPages ) {
    cout << "Chapter " << iChLine << ": " << sTitle << " ";
    //converting int to string (iChLine >> sChLine)
    string sChLine = intToString(iChLine);
    //double space string for space before and after dots().
    string sOutputLine = "Chapter " + sChLine + ": " + sTitle + " " + " ";
    int iLineLenght = sOutputLine.size();
    int iPageChar = countChar(iPages);
    int iNumberDots = 62 - iLineLenght - iPageChar;
    dots(iNumberDots);
    cout << " " << iPages << endl;
}


void printSectionLine( int iSeLine, string sSection, int iPages  ) {
    cout << "  Section " << iSeLine << ": " << sSection << " ";
    //converting int to string (iSeLine >> sSeLine)
    string sSeLine = intToString(iSeLine);
    //double space string for space before and after dots().
    string sOutputLine = "  Section " + sSeLine + ": " + sSection + " " + " ";
    int iLineLenght = sOutputLine.size();
    int iPageChar = countChar(iPages);
    int iNumberDots = 62 - iLineLenght - iPageChar;
    dots(iNumberDots);
    cout << " " << iPages << endl;
}

void dots(int iTimes) {
    for (int i = 0; i < iTimes ;i++){
        cout << ".";
    }
}


int countChar(int iInteger) {
    int iNumberChar;
    if(iInteger > 999 )
        iNumberChar = 4;
    else if (iInteger > 99)
        iNumberChar = 3;
    else if (iInteger > 9)
        iNumberChar = 2;
    else
        iNumberChar = 1;
    return iNumberChar;
}


string intToString(int iInteger) {
    string sString;
    ostringstream convert;
    convert << iInteger;
    sString = convert.str();
    return sString;
}

void helper() {
    for (int i = 1; i <= 62; i++)
        cout << i % 10;
    cout << endl;
}

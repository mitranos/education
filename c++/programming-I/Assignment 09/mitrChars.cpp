/**
 *
 * File:         mitrChars.cpp
 * Purpose:      Class Exercise, chars Arrays.
 * Project:      CSIS 2100 Assignment 09.
 * Company:      Nova Southeastern University
 * Supervisor:   Dr. Michael Van Hilst
 *
 * Author:       Salvatore Mitrano
 * History:      Created 2/14/2013
 * Assisted by:  none
 * References:   none
 *
 * (c) Copyright Salvatore Mitrano 2013 All rights reserved.
 ***/
#include <iostream>
using namespace std;

int getWord(char[],int);
void showWord(char[],int);
void countE(char[],int);
void replaceLowerCase(char[],int);

int main() {
    const int BUF_SZ = 256;
    char caBuffer[BUF_SZ];
    int iWordLen;
    iWordLen = getWord(caBuffer,BUF_SZ);
    showWord(caBuffer,iWordLen);
    countE(caBuffer,iWordLen);
    replaceLowerCase(caBuffer,iWordLen);
	showWord(caBuffer,iWordLen);
    return 0;
}

int getWord( char caBuffer[] , int iLength ) {
    cout << "Enter a word with comma: ";
    int i;
    for (i = 0; i < iLength; i++) {
        cin >> caBuffer[i];
        if (caBuffer[i] == ',') {
            caBuffer[i] = 0;
            break;
        }
    }
    return i;
}

void showWord( char caWord[] , int iLength ) {
    for (int i = 0; i < iLength; i++)
        cout << caWord[i];
    cout << endl;
}

void countE(char caWord[],int iLength) {
    int iTimesE = 0;
    for (int i = 0; i < iLength; i++) {
        if (caWord[i] == 'e')
            iTimesE++;
    }
    cout << "The lecter 'e' is repeted " << iTimesE << " times" << endl;
}

void replaceLowerCase(char caWord[],int iLength) {
    for (int i = 0; i < iLength; i++) {
        if ((caWord[i] >= 'a') && (caWord[i] <= 'z'))
            caWord[i] += 'A' - 'a';
    }
}


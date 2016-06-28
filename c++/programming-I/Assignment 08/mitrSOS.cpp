/**
 *
 * File:         mitrSOS.cpp
 * Purpose:      Practice writing loops and using functions.
 * Project:      CSIS 2100 Assignment 08.
 * Company:      Nova Southeastern University
 * Supervisor:   Dr. Michael Van Hilst
 *
 * Author:       Salvatore Mitrano
 * History:      Created 2/10/2013
 * Assisted by:  none
 * References:   none
 *
 * (c) Copyright Salvatore Mitrano 2013 All rights reserved.
 **/
#include <iostream>
#include <unistd.h>
using namespace std;

void dots(int);
void dashed(int);
void sendSOS();
void waitSeconds(int);
void distressCall();
void spaceTriangle(int);
void slowTriangle(int);


int main() {
	slowTriangle(5);
	return 0;
}

void dots(int iDots) {
	for (int i = iDots; i > 0; i--) {
		cout << ".";
	}
}

void dashed(int iDashes) {
	for (int j = 0; j < iDashes; j++) {
		cout << "-";
	}
}

void sendSOS() {
	dashed(3);
	dots(3);
	dashed(3);
	cout << endl;
}

void waitSeconds(int iSec) {
	sleep(iSec);
}

void distressCall() {
	while(true) {
		sendSOS();
		waitSeconds(1);
	}
}

void spaceTriangle(int iHeight) {
	for(int k = 1; k <= iHeight; k++) {
		dots(k);
		cout << endl;
	}
}

void slowTriangle(int iHeight) {
	for(int l = 1; l <= iHeight; l++) {
	    for (int m = l; m > 0; m--) {
		    dots(1);
		    cout.flush();
		    waitSeconds(1);
		}
		cout << endl;
	}
}


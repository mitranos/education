/**
 *
 * File:         mitrArchimedes.cpp
 * Purpose:      Check purity of the gold.
 * Project:      CSIS 2100 Assignment 07
 * Company:      Nova Southeastern University
 * Supervisor:   Dr. Michael Van Hilst
 *
 * Author:       Salvatore Mitrano
 * History:      Created 1/25/2013
 * Assisted by:  none
 * References:   none
 *
 * (c) Copyright Salvatore Mitrano 2013 All rights reserved.
 ***/
#include <iostream>
using namespace std;

bool checkPurity( double , double );
double convertToGarams( double );
double convertToCubicCm( double );


int main() {
    double dWeight;
    double dVolume;
    bool bResult;
    cout << "I will tell you if your gold is pure or not!" << endl;
    cout << "Enter the Volumes in Gallons: ";
    cin >> dVolume;
    cout << "Enter the Weight in Pounds: ";
    cin >> dWeight;
    bResult = checkPurity(dVolume,dWeight);
    if (bResult)
        cout << "Eureka! Your Gold Is Pure!" << endl;
    else
        cout << "I'm sorry your gold is NOT pure!" << endl;
    return 0;
}


double convertToCubicCm( double dParamGallons ) {
    double dCubicCm;
    dCubicCm = ( dParamGallons * 3.785 ) * 1000;
    return dCubicCm;
}


double convertToGarams( double dParamPounds ) {
    double dGrams;
    dGrams = dParamPounds * 453.6;
    return dGrams;
}


bool checkPurity( double dParamVol , double dParamWht ) {
    double dPureGold = 19.32;
    double dTotal;
    double dWhtMax;
    double dWhtMini;
    double dGrams;
    double dCubicCm;
    dGrams = convertToGarams(dParamWht);
    dCubicCm = convertToCubicCm(dParamVol);
    dWhtMax = dGrams * 1.01;
    dWhtMini = dGrams * 0.99;
    dTotal = dCubicCm * dPureGold;
    if ((dTotal < dWhtMax) && (dTotal > dWhtMini))
        return true;
    else
        return false;
}
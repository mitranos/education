/**
 *
 * File:         mitrIntArr.cpp
 * Purpose:      Write colletion of Array Integers function.
 * Project:      CSIS 2100 Assignment 11.
 *
 * Company:      Nova Southeastern University
 * Supervisor:   Dr. Michael Van Hilst
 *
 * Author:       Salvatore Mitrano
 * History:      Created 2/25/2013
 * Assisted by:  none
 * References:   none
 *
 * (c) Copyright Salvatore Mitrano 2013 All rights reserved.
 **/
#include <iostream>
using namespace std;

void printArray(int[],int);
int sumOfArray(int[],int);
int maxInArray(int[],int);
int minInArray(int[],int);
int rangeInArray(int[],int);
double meanOfArray(int[],int);
void clipArray(int[],int,int);

int main() {
    const int ARRAY_SIZE_1 = 10;
    const int ARRAY_SIZE_2 = 9;
    int array1[ARRAY_SIZE_1] = {4,7,9,3,2,8,15,6,8,7};
    int array2[ARRAY_SIZE_2] = {12,6,4,8,3,7,11,1,6};
    printArray(array1,ARRAY_SIZE_1);
    printArray(array2,ARRAY_SIZE_2);
    cout << "The sum of array 1 is "
            << sumOfArray(array1,ARRAY_SIZE_1) << endl;
    cout << "The sum of array 2 is "
            << sumOfArray(array2,ARRAY_SIZE_2) << endl;
    cout << "The maximum value of array 1 is "
            << maxInArray(array1,ARRAY_SIZE_1) << endl;
    cout << "The maximum value of array 2 is "
            << maxInArray(array2,ARRAY_SIZE_2) << endl;
    cout << "The minimum value of array 1 is "
            << minInArray(array1,ARRAY_SIZE_1) << endl;
    cout << "The minimum value of array 2 is "
            << minInArray(array2,ARRAY_SIZE_2) << endl;
    cout << "The range of array 1 is "
            << rangeInArray(array1,ARRAY_SIZE_1) << endl;
    cout << "The range of array 2 is "
            << rangeInArray(array2,ARRAY_SIZE_2) << endl;
    cout << "The average of array 1 is "
            << meanOfArray(array1,ARRAY_SIZE_1) << endl;
    cout << "The average of array 2 is "
            << meanOfArray(array2,ARRAY_SIZE_2) << endl;
    clipArray(array1,ARRAY_SIZE_1,5);
    clipArray(array2,ARRAY_SIZE_2,5);
    printArray(array1,ARRAY_SIZE_1);
    printArray(array2,ARRAY_SIZE_2);
    return 0;
}

void printArray(int iArray[], int iLen) {
    int i;
    cout << "{";
    for (i = 0; i < (iLen - 1); i++)
        cout << iArray[i] << ",";
    cout << iArray[i] << "}" << endl;
}

int sumOfArray(int iArray[], int iLen) {
    int iSum = 0;
    for (int i = 0; i < iLen; i++)
        iSum += iArray[i];
    return iSum;

}

int maxInArray(int iArray[], int iLen) {
    int maxValue = iArray[0];
    for (int i = 0; i <= iLen; i++){
        if (maxValue <= iArray[i])
            maxValue = iArray[i];
    }
    return maxValue;
}

int minInArray(int iArray[], int iLen) {
    int minValue = iArray[0];
    for (int i = 0; i <= iLen; i++){
        if (minValue >= iArray[i])
            minValue = iArray[i];
    }
    return minValue;
}


int rangeInArray(int iArray[], int iLen) {
    int iRange;
    int iMaxValue = maxInArray(iArray,iLen);
    int iMinValue = minInArray(iArray,iLen);
    iRange = iMaxValue - iMinValue;
    return iRange;
}


double meanOfArray(int iArray[], int iLen) {
    double dSum = 1.0;
    double dAverage;
    dSum = sumOfArray(iArray,iLen);
    dAverage = dSum / iLen;
    return dAverage;
}

void clipArray(int iArray[], int iLen, int iMax) {
    for (int i = 0; i <= iLen; i++){
        if (iArray[i] > iMax)
            iArray[i] = iMax;
    }
}

/**
 *
 * File:         mitrCalculator.cpp
 * Purpose:      Create a Reverse Polish Calculator.
 * Project:      CSIS 2100 Assignment 04
 *
 * Company:      Nova Southeastern University
 * Supervisor:   Dr. Michael Van Hilst
 *
 * Author:       Salvatore Mitrano
 * History:      Created 1/20/2013
 * Assisted by:  none
 * References:   none
 *
 * (c) Copyright Salvatore Mitrano 2012 All rights reserved.
 **/
#include <iostream>
using namespace std;

int main()
{
    double dblVal1;
    double dblVal2;
    char chOperator;
    double dblOperation;
    cout << "I will Perfor claculation for you." << endl;
    cout << "Enter the initial number: ";
    cin >> dblVal1;
    //If the imput is valid continue else stop the program
    if (!(cin.fail())) {
        do {
            cin.clear();
            cin.ignore();
            cout << "Enter the next number: ";
            cin >> dblVal2;
            //If the 2nd input is valid continue else ask again for 2nd input
            if (!(cin.fail())) {
                cout << "Enter an operation(+,-,*,/): ";
                cin >> chOperator;
                switch (chOperator) {
                    case '+':
                        dblOperation = dblVal1 + dblVal2;
                        cout << "Yor result is: " << dblOperation << endl;
                        break;
                    case '-':
                        dblOperation = dblVal1 - dblVal2;
                        cout << "Yor result is: " << dblOperation << endl;
                        break;
                    case '*':
                        dblOperation = dblVal1 * dblVal2;
                        cout << "Yor result is: " << dblOperation << endl;
                        break;
                    case '/':
                        if (dblVal2 == 0) {
                            cout << "I can't divide by 0." << endl;
                            break;
                        }
                        dblOperation = dblVal1 / dblVal2;
                        cout << "Yor result is: " << dblOperation << endl;
                        break;
                    default:
                        cout << "Your input was't an operator" << endl;
                        dblOperation = dblVal1;
                }
                dblVal1 = dblOperation;
            }
        } while (dblVal1 != 0);
    } else {
        cout << "I'm sorry your input is invalid!" << endl;
    }
    cout << "Thanks for using the calculator." << endl;
    cout << "(c) Copyright Salvatore Mitrano 2012 All rights reserved." << endl;
    return 0;
}
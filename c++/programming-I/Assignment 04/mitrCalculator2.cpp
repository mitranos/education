/**
 *
 * File: InClass.cpp
 * Purpose: In class excercice 3
 *
 * Company: Nova Southeastern University 
 * Supervisor: Dr. Michael Van Hilst
 *
 * Author: Salvatore Mitrano
 * History: Created 1/18/2013
 *
 * (c) Copyright <Your Name> 2012 All rights reserved.
 *
 **/
#include <iostream>
using namespace std;

int main(){
    double dblVal1;
    double dblVal2;
    char chOperator;
    double dblOperation;
    cout << "I will Perfor claculation for you." << endl;
    do{
        cout << "Enter the first number: ";
        cin >> dblVal1;
        cout << "Enter the second number: ";
        cin >> dblVal2;
        cout << "Enter an operation(+,-,*,/): ";
        cin >> chOperator;
        if ((chOperator == '+') || (chOperator == '-')
           || (chOperator == '*') || (chOperator == '/')) {
            if (chOperator == '+'){
                dblOperation = dblVal1 + dblVal2;
            } else if (chOperator == '-') { 
                dblOperation = dblVal1 - dblVal2;
            } else if (chOperator == '*') {
                dblOperation = dblVal1 * dblVal2;
            } else if (chOperator == '/') {
                dblOperation = dblVal1 / dblVal2;
            }
            cout << "Yor result is: " << dblOperation << endl;  
        } else {
            cout << "Your input was't an operator" << endl;
        }
    } while (dblVal1 != 0);
    return 0;   
}

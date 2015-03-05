/**
 *
 * File:         youBooks.cpp
 * Purpose:      First assignment with objects.
 * Project:      CSIS 2100 Assignment 13
 *
 * Company:      Nova Southeastern University
 * Supervisor:   Dr. Michael Van Hilst
 *
 * Author:       Salvatore Mitrano
 * History:      Created 3/17/2013
 * Assisted by:  none
 * References:   none
 *
 * (c) Copyright Salvatore Mitrano 2013 All rights reserved.
 **/
#include <iostream>
#include "Book.h"
using namespace std;


int main() {
    Book textbook, reference, futureRef;
    textbook.setTitle("Starting Out with C++");
    textbook.setAuthors("Gaddis, Walters, and Muganda");
    textbook.setEdition(7);
    textbook.setYear(2011);
    textbook.setPublisher("Addison-Wesley");
    textbook.show();
    reference.setTitle("The C++ Programming Language");
    reference.setAuthors("Stroustrup");
    reference.setEdition(3);
    reference.setYear(1997);
    reference.setPublisher(textbook.getPublisher());
    futureRef.setTitle(reference.getTitle());
    futureRef.setAuthors(reference.getAuthors());
    futureRef.setPublisher(reference.getPublisher());
    futureRef.setEdition(4);
    futureRef.setYear(2013);
    reference.show();
    futureRef.show();
    return 0;
}
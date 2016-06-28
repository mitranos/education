/**
 *
 * File:         Book.h
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
#include <string>
#include "Book.h"
using namespace std;

Book::Book(void)
{
}

Book::~Book(void)
{
}

void Book::setTitle(string title)
{
    sTitle = title;
}

void Book::setAuthors(string author)
{
    sAuthor = author;
}

void Book::setEdition(int edition)
{
    iEdition = edition;
}

void Book::setYear(int year)
{
    iYear = year;
}

void Book::setPublisher(string publisher)
{
    sPublisher = publisher;
}

string Book::getTitle()
{
    return sTitle;
}

string Book::getAuthors()
{
    return sAuthor;
}

int Book::getEdition()
{
    return iEdition;
}

int Book::getYear()
{
    return iYear;
}

string Book::getPublisher()
{
    return sPublisher;
}

void Book::show()
{
    cout << getTitle() << " by " << getAuthors() << endl;
}
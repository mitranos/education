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
#pragma once
#include <iostream>
#include <string>
using namespace std;

class Book {
private:
    string sTitle;
    string sAuthor;
    int iEdition;
    int iYear;
    string sPublisher;
    
public:
    Book(void);
    ~Book(void);
    void setTitle(string title);
    void setAuthors(string author);
    void setEdition(int edition);
    void setYear(int year);
    void setPublisher(string publisher);
    string getTitle();
    string getAuthors();
    int getEdition();
    int getYear();
    string getPublisher();
    void show();
};
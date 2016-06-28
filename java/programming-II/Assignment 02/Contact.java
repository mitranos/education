/**
 *
 * File:         Contact.java
 * Purpose:      Create a Contact Class to store data.
 * Project:      CSIS 3100 Assignment 02
 *
 * (c) Copyright Salvatore Mitrano 2013 All rights reserved.
 **/
public class Contact {

	private String first;
	private String last;
	private String street;
	private String city;
	private String state;
	private String zip;
	private String phone;
	private String email;

	Contact() {
		first = "Salvatore";
		last = "Mitrano";
		street = "2500 eagle run dr";
		city = "Weston";
		state = "Florida";
		zip = "33327";
		phone = "7867158258";
		email = "sm2191@nova.edu";
	}
	public void addContact(String first, String last, String street, String city, String state,String zip, String phone, String email){
		this.first = first;
		this.last = last;
		this.street = street;
		this.city = city;
		this.state = state;
		this.zip = zip;
		this.phone = phone;
		this.email = email;
	}

	public void printContact(int id){

		System.out.printf("%2s %-15s %-15s %-15s %-15s %-15s %-15s %-15s %-15s%n", id, first, last, street, city, state, zip, phone, email);

	}

	public void setFirst(String first){
		this.first = first;
	}

	public void setLast(String last){
		this.last = last;
	}

	public void setStreet(String street){
		this.street = street;
	}

	public void setCity(String city){
		this.city = city;
	}

	public void setState(String state){
		this.state = state;
	}

	public void setZip(String zip){
		this.zip = zip;
	}

	public void setPhone(String phone){
		this.phone = phone;
	}

	public void setEmail(String email){
		this.email = email;
	}
}

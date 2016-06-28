
public class Contact {
	
	private String first;
	private String last;
	private String university;
	private String street;
	private String zip;
	
	Contact() {
		first = "Salvatore";
		last = "Mitrano";
		university = "NSU";
		street = "2500 eagle run dr";
		zip = "33327";
}
	public void addContact(String first, String last, String university, String street, String zip){
		this.first = first;
		this.last = last;
		this.university = university;
		this.street = street;
		this.zip = zip;
	}
	
	public void editContact(String first, String last, String university, String street, String zip){
		this.first = first;
		this.last = last;
		this.university = university;
		this.street = street;
		this.zip = zip;
	}
	
	public void printContact(int id){
		
		System.out.printf("%2s  %-15s   %-15s   %-15s  %-15s %-15s%n", id, first, last, university, street, zip);
		
	}
}

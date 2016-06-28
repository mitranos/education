import java.util.*;

public class Contacts {
	Scanner user_input = new Scanner( System.in );
	Contact contact = new Contact();
	
	ArrayList<Contact> contactsList = new ArrayList<Contact>();
	
	public void addToContactList(Contact contact){
		contactsList.add(contact);
	}
	
	public void printContact(){
		if(contactsList.isEmpty()){
			System.out.print("\n There are no users to Show! Add some one's!");
		} else {
			System.out.printf("%2s  %-15s   %-15s   %-15s  %-15s %-15s%n", "n", "First Name", "Last Name", "University", "Address", "Zip Code");
			for (int i = 0; i < contactsList.size(); i++){
				contact = contactsList.get(i);
				contact.printContact(i);
			}
		}
	}
	
	public void addContact(){
		System.out.println("Add the folowing info:");
		System.out.print("First Name: ");
		String first = user_input.next();
		System.out.print("Last Name: ");
		String last = user_input.next();
		System.out.print("University: ");
		String university = user_input.next();
		System.out.print("Street: ");
		String street = user_input.next();
		System.out.print("Zip Code: ");
		String zip = user_input.next();
		
		Contact contact = new Contact();
		contact.addContact(first, last, university, street, zip);
		
		addToContactList(contact);
	}
	
	public void deleteContact(){
		if(contactsList.isEmpty()){
			System.out.print("\n There are no users to delete! Add some one's!");
		} else {
		printContact();
		System.out.print("\n Enter the user number you want to delete: ");
		int x = user_input.nextInt();
		contactsList.remove(x);
		}
	}
	
	public void editContact(){
		if(contactsList.isEmpty()){
			System.out.print("\n There are no users to edit! Add some one's!");
		} else {
		printContact();
		System.out.print("\n Enter the user number you want to edit: ");
		int x = user_input.nextInt();
		for (int i = 0; i < x++; i++){
			contact = contactsList.get(i);
		}
		System.out.println("Edit the folowing info:");
		System.out.print("First Name: ");
		String first = user_input.next();
		System.out.print("Last Name: ");
		String last = user_input.next();
		System.out.print("University: ");
		String university = user_input.next();
		System.out.print("Street: ");
		String street = user_input.next();
		System.out.print("Zip Code: ");
		String zip = user_input.next();
		
		contact.editContact(first, last, university, street, zip);
		
		}
	}
}

<?php

class UserModel
{
    /**
     * Constructor, expects a Database connection
     * @param Database $db The Database object
     */
    public function __construct(Database $db)
    {
        $this->db = $db;
    }
	
	/**
     * Get User Info (for DEFAULT user accounts).
     * @return Array
     */
  	public function getUserById($user_id)
	{
		$sth = $this->db->prepare("SELECT user_id, person_first_name, person_last_name, person_gender, person_address, user_profile_picture, user_cover_picture, user_email,
										YEAR(NOW()) - YEAR(person_birthday) - (DATE_FORMAT(NOW(), '00-%m-%d') < DATE_FORMAT(person_birthday, '00-%m-%d')) AS age,
										DATE_FORMAT(FROM_UNIXTIME(user_creation_timestamp), '%e %M %Y') AS member,
										DATE_FORMAT(person_birthday, '%m/%d/%Y') AS birthday
									FROM users 
									LEFT JOIN people ON people.person_user_id = users.user_id 
									WHERE user_id = :user_id");
        $sth->execute(array(':user_id' => $user_id));
        $result = $sth->fetch();
		
		return $result;
	}
	

    /**
     * Get User Gender (for DEFAULT user accounts).
     * It get the user gender and return if it is male female or no gender
	 * (it menans that there Error getting data from the database)
     * @return String
     */
  	public function getUserGender($user_id)
	{
		$sth = $this->db->prepare("SELECT person_gender FROM users LEFT JOIN people ON people.person_user_id = users.user_id WHERE user_id = :user_id");
        $sth->execute(array(':user_id' => $user_id));
        $result = $sth->fetch();
		
		if ($result->person_gender == 1){
			return "Male";	
		}else if ($result->person_gender == 2){
			return "Female";
		}
		return "No Gender";
	}
	
	
	/**
     * Get User Birthday.
     * 
     * @return String
     */
	public function getUserBirthdayYear($user_id)
	{
		$sth = $this->db->prepare("SELECT YEAR(NOW()) - YEAR(person_birthday) - (DATE_FORMAT(NOW(), '00-%m-%d') < DATE_FORMAT(person_birthday, '00-%m-%d')) AS age FROM users LEFT JOIN people ON people.person_user_id = users.user_id WHERE user_id = :user_id");
        $sth->execute(array(':user_id' => $user_id));
        $result = $sth->fetch();
			
		return $result->age;
	}
	
	/**
     * Get User Birthday.
     * 
     * @return String
     */
	public function getUserBirthday($user_id)
	{
		$sth = $this->db->prepare("SELECT DATE_FORMAT(person_birthday, '%m/%d/%Y') AS birthday FROM users LEFT JOIN people ON people.person_user_id = users.user_id WHERE user_id = :user_id");
        $sth->execute(array(':user_id' => $user_id));
        $result = $sth->fetch();
			
		return $result->birthday;
	}
	
	
	/**
     * Get Member of BeNight Since.
     * 
     * @return String
     */
	public function memberOfBenight($user_id)
	{
		$sth = $this->db->prepare("SELECT DATE_FORMAT(FROM_UNIXTIME(user_creation_timestamp), '%e %M %Y') AS member FROM users WHERE user_id = :user_id");
        $sth->execute(array(':user_id' => $user_id));
        $result = $sth->fetch();
			
		return $result->member;
	}
	
	/**
     * Get User Address.
     * 
     * @return String
     */
	public function getUserAddress($user_id)
	{
		$sth = $this->db->prepare("SELECT person_address FROM users LEFT JOIN people ON people.person_user_id = users.user_id WHERE user_id = :user_id");
        $sth->execute(array(':user_id' => $user_id));
        $result = $sth->fetch();
			
		return $result->person_address;
	}
	
	/**
     * Get User Profile Picture.
     * 
     * @return String
     */
	public function getUserProfile($user_id)
	{
		$sth = $this->db->prepare("SELECT user_profile_picture FROM users LEFT JOIN people ON people.person_user_id = users.user_id WHERE user_id = :user_id");
        $sth->execute(array(':user_id' => $user_id));
        $result = $sth->fetch();
			
		return $result->user_profile_picture;
	}
	
	/**
     * Get User Cover Picture.
     * 
     * @return String
     */
	public function getUserCover($user_id)
	{
		$sth = $this->db->prepare("SELECT user_cover_picture FROM users LEFT JOIN people ON people.person_user_id = users.user_id WHERE user_id = :user_id");
        $sth->execute(array(':user_id' => $user_id));
        $result = $sth->fetch();
			
		return $result->user_cover_picture;
	}
	
	
	/**
     * Get User events that he will partecipate.
     * 
     * @return String
     */
	public function getUserWillPartecipateEvents($user_id)
	{
		$sth = $this->db->prepare("SELECT * , DATE_FORMAT(event_start_time, '%e %b %Y %h%p') AS event_start_time
									FROM partecipate 
									LEFT JOIN events ON events.event_id = partecipate.partecipate_event_id
									LEFT JOIN venues ON venues.venue_id = events.event_venue_id 
									WHERE partecipate_user_id = :user_id AND event_start_time > CURDATE();");
        $sth->execute(array(':user_id' => $user_id));
        $result = $sth->fetchAll();
			
		return $result;
	}
	
	
		
	/**
     * Get User events that he will partecipate.
     * 
     * @return String
     */
	public function getUserPartecipatedEvents($user_id)
	{
		$sth = $this->db->prepare("SELECT *, DATE_FORMAT(event_start_time, '%e %b %Y %h%p') AS event_start_time
									FROM partecipate 
									LEFT JOIN events ON events.event_id = partecipate.partecipate_event_id
									LEFT JOIN venues ON venues.venue_id = events.event_venue_id 
									WHERE partecipate_user_id = :user_id AND event_start_time <= CURDATE();");
        $sth->execute(array(':user_id' => $user_id));
        $result = $sth->fetchAll();
			
		return $result;
	}

	
}

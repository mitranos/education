<?php

class EventModel
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
     * Get User events that he will partecipate.
     * 
     * @return String
     */
	public function getEventById($event_id)
	{
		$sth = $this->db->prepare("SELECT * , DATE_FORMAT(event_start_time, '%e %b %Y %h%p') AS event_start_time
									FROM events
									LEFT JOIN venues ON venues.venue_id = events.event_venue_id
									LEFT JOIN tables ON tables.table_id = events.event_table_id
									LEFT JOIN drinks ON events.event_id = events.event_drink_id
									WHERE event_id = :event_id");
        $sth->execute(array(':event_id' => $event_id));
        $result = $sth->fetch();
			
		return $result;
	}
	
	public function getRandomEvents()
	{
		$sth = $this->db->prepare("SELECT * , DATE_FORMAT(event_start_time, '%e %b %Y %h%p') AS event_start_time
									FROM events
									LEFT JOIN venues ON venues.venue_id = events.event_venue_id
									WHERE event_start_time > CURDATE()
									ORDER BY RAND(), event_start_time ASC
									LIMIT 3");
        $sth->execute(array());
        $result = $sth->fetchAll();
			
		return $result;
	}
	
	
	public function getLastCreatedEventByVenueId($venue_id)
	{
		$sth = $this->db->prepare("SELECT * , DATE_FORMAT(event_start_time, '%e %b %Y %h%p') AS event_start_time
									FROM events
									LEFT JOIN venues ON venues.venue_id = events.event_venue_id
									WHERE venue_id = :venue_id  AND event_start_time > CURDATE()
									ORDER BY event_creation_timestamp DESC
									LIMIT 1");
        $sth->execute(array(':venue_id' => $venue_id));
        $result = $sth->fetch();
			
		return $result;
	}
	
	public function getFutureEventsByVenueId($venue_id)
	{
		$sth = $this->db->prepare("SELECT * , DATE_FORMAT(event_start_time, '%e %b %Y %h%p') AS event_start_time
									FROM events
									LEFT JOIN venues ON venues.venue_id = events.event_venue_id
									WHERE venue_id = :venue_id AND event_start_time > CURDATE()
									ORDER BY event_start_time ASC");
        $sth->execute(array(':venue_id' => $venue_id));
        $result = $sth->fetchAll();
			
		return $result;
	}
	
	public function getPastEventsByVenueId($venue_id)
	{
		$sth = $this->db->prepare("SELECT * , DATE_FORMAT(event_start_time, '%e %b %Y %h%p') AS event_start_time
									FROM events
									LEFT JOIN venues ON venues.venue_id = events.event_venue_id
									WHERE venue_id = :venue_id AND event_start_time <= CURDATE()
									ORDER BY event_start_time DESC");
        $sth->execute(array(':venue_id' => $venue_id));
        $result = $sth->fetchAll();
			
		return $result;
	}
	
	public function deleteEvent($event_id){
		$sth = $this->db->prepare("DELETE FROM events WHERE event_id = :event_id");
		$sth->execute(array(':event_id' => $event_id));
		return true;	
	}
	
	public function createAjaxEvent(){
		//echo $_POST['eventName'];
		//echo $_POST['description'];
		//echo $_POST['start_date'];
		//echo $_POST['end_date'];
		//echo $_POST['table_small_price'];
		//echo $_POST['table_small_description'];
		//echo $_POST['table_medium_price'];
		//echo $_POST['table_medium_description'];
		//echo $_POST['drink_small_price'];
		//echo $_POST['drink_small_description'];
		//echo $_POST['drink_medium_price'];
		//echo $_POST['drink_medium_description'];
		//echo $_FILES['picture']['name'];
		//print_r($_POST);
		//print_r($_FILES);
		//echo 1;
		$sql = "INSERT INTO tables (table_small_price, table_small_desc, table_medium_price, table_medium_desc)
                    VALUES (:table_small_price, :table_small_desc, :table_medium_price, :table_medium_desc)";
            $query = $this->db->prepare($sql);
            $query->execute(array(':table_small_price' => ('$' .$_POST['table_small_price']),
                                  ':table_small_desc' =>  $_POST['table_small_description'],
                                  ':table_medium_price' => ('$' . $_POST['table_medium_price']),
                                  ':table_medium_desc' => $_POST['table_medium_description']));
            $result =  $query->rowCount();
			
			$table_id = $this->db->lastInsertId();
			
			
			$sql = "INSERT INTO drinks (drink_soft_from, drink_soft_desc, drink_strong_from, drink_strong_desc)
                    VALUES (:drink_soft_from, :drink_soft_desc, :drink_strong_from, :drink_strong_desc)";
            $query = $this->db->prepare($sql);
            $query->execute(array(':drink_soft_from' => ('$' .$_POST['drink_small_price']),
                                  ':drink_soft_desc' =>  $_POST['drink_small_description'],
                                  ':drink_strong_from' => ('$' . $_POST['drink_medium_price']),
                                  ':drink_strong_desc' => $_POST['drink_medium_description']));
            $result =  $query->rowCount();
			
			$drink_id = $this->db->lastInsertId();
			
			date_default_timezone_set('America/Los_Angeles');
			
			
			$sql = "INSERT INTO events (event_venue_id, event_name, event_desc, event_start_time, event_end_time, evet_age_target_from, event_age_target_to, event_sex_target, event_free_or_pay, event_table_id, event_drink_id, event_creation_timestamp)
                    VALUES (:event_venue_id, :event_name, :event_desc, :event_start_time, :event_end_time, :evet_age_target_from, :event_age_target_to, :event_sex_target, :event_free_or_pay, :event_table_id, :event_drink_id, :event_creation_timestamp)";
            $query = $this->db->prepare($sql);
            $query->execute(array(':event_venue_id' => $_SESSION['user_venue_id'],
                                  ':event_name' =>  $_POST['eventName'],
                                  ':event_desc' => $_POST['description'],
                                  ':event_start_time' => date('Y-m-d H:i', strtotime(str_replace('-', '/', $_POST['start_date']))),
								  ':event_end_time' => date('Y-m-d H:i', strtotime(str_replace('-', '/', $_POST['end_date']))),
								  ':evet_age_target_from' => "21",
								  ':event_age_target_to' => "60",
								  ':event_sex_target' => "0",
								  ':event_free_or_pay' => "free",
								  ':event_table_id' => $table_id,
								  ':event_drink_id' => $drink_id,
								  ':event_creation_timestamp' => time()));
            $result =  $query->rowCount();
			
			if ($result == 1){
				return true;	
			}
	}
	
	public function partecipate($event_id, $user_id){
		$sql = "INSERT INTO partecipate (partecipate_event_id, partecipate_user_id, partecipate_creation_timestamp)
                    VALUES (:partecipate_event_id, :partecipate_user_id, :partecipate_creation_timestamp)";
            $query = $this->db->prepare($sql);
            $query->execute(array(':partecipate_event_id' => $event_id,
                                  ':partecipate_user_id' =>  $user_id,
								  ':partecipate_creation_timestamp' => time()));
            $result =  $query->rowCount();
			
			if ($result == 1){
				return true;	
			}
	}
	
	public function checkPartecipate($event_id, $user_id){
		$sql = "SELECT * FROM partecipate WHERE partecipate_event_id = :partecipate_event_id AND partecipate_user_id = :partecipate_user_id";
            $query = $this->db->prepare($sql);
            $query->execute(array(':partecipate_event_id' => $event_id,
                                  ':partecipate_user_id' =>  $user_id));
            $result =  $query->rowCount();
			
			if ($result == 1){
				return true;	
			}
			return false;
	}
	
	public function unpartecipate($event_id, $user_id){
			//echo $event_id;
			//echo $user_id;
			$sql = "DELETE FROM partecipate WHERE partecipate_event_id = :partecipate_event_id AND partecipate_user_id = :partecipate_user_id";
            $query = $this->db->prepare($sql);
            $query->execute(array(':partecipate_event_id' => $event_id,
                                  ':partecipate_user_id' =>  $user_id));
            $result =  $query->rowCount();
			
			if ($result == 1){
				return true;	
			}
	}
}

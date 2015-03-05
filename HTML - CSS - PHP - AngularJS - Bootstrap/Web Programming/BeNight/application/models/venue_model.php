<?php

class VenueModel
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
	public function getVenueInfo($venue_id)
	{
		$sth = $this->db->prepare("SELECT * FROM venues 
									WHERE venue_id = :user_id");
        $sth->execute(array(':user_id' => $venue_id));
        $result = $sth->fetch();
			
		return $result;
	}

	public function getAllVenuesForCheck()
	{
		$sth = $this->db->prepare("SELECT * FROM venues WHERE venue_check = 0");
        $sth->execute(array());
        $result = $sth->fetchAll();
			
		return $result;
	}	

	public function verify($venue_id)
	{
		$sth = $this->db->prepare("UPDATE venues SET venue_check = 1 WHERE venue_id = :venue_id AND venue_check = 0");
        $sth->execute(array(':venue_id' => $venue_id));
        $result = $sth->rowCount();
		if($result == 1){
			return true;
		}else{
			return false;		
		}
	}	

	public function createVenue(){
		
		if(!empty($_POST['venue_name']) AND !empty($_POST['venue_address']) AND !empty($_POST['category']) AND !empty($_POST['venue_short_desc'])) {
			$sql = "INSERT INTO venues (venue_user_id, venue_name, venue_address, venue_category, venue_short_desc)
                    VALUES (:venue_user_id, :venue_name, :venue_address, :venue_category, :venue_short_desc)";
            $query = $this->db->prepare($sql);
            $query->execute(array(':venue_user_id' => Session::get('user_id'),
								  ':venue_name' => $_POST['venue_name'],
                                  ':venue_address' =>  $_POST['venue_address'],
                                  ':venue_category' => $_POST['category'],
                                  ':venue_short_desc' => $_POST['venue_short_desc']));
            $result =  $query->rowCount();
			
			$venue_id = $this->db->lastInsertId();
			
			if($result == 1) {
				
				$sth = $this->db->prepare("SELECT venue_id, venue_name, venue_profile_picture, venue_backgr_picture FROM venues WHERE venue_user_id = :user_id");
            	$sth->execute(array(':user_id' => Session::get('user_id')));
            	$venueResult = $sth->fetchAll();
            	if($venueResult){
                	Session::set('venuesInfo', $venueResult);
					
					Session::set('user_venue_id', $venue_id);
					
					$venue_info = self::getVenueInfo($venue_id);
					
					Session::set('user_venue_name', $venue_info->venue_name);
       				Session::set('user_venue_picture', $venue_info->venue_profile_picture);
       				Session::set('user_venue_backgr', $venue_info->venue_backgr_picture);
            	}
				return true;
			}
			return false;
		}
		return false;
	}
	
}

<?php

class VenuecheckModel
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
	public function getUserWishlist($user_id)
	{
		$sth = $this->db->prepare("SELECT *, DATE_FORMAT(event_start_time, '%e %b %Y %h%p') AS event_start_time
						 			FROM  
									LEFT JOIN events ON events.event_id = wishlist.wishlist_event_id
									WHERE wishlist_user_id = :user_id");
        $sth->execute(array(':user_id' => $user_id));
        $result = $sth->fetchAll();
			
		return $result;
	}
	
	public function deleteWishlistEvent($wish_id){
		$sth = $this->db->prepare("DELETE FROM wishlist WHERE wishlist_id = :wish_id");
		$sth->execute(array(':wish_id' => $wish_id));
		return true;	
	}

}

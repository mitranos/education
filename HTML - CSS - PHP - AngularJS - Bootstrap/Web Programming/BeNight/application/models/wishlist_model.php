<?php

class WishlistModel
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
						 			FROM wishlist 
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

	

	public function addWishlist($event_id, $user_id){
		$sql = "INSERT INTO wishlist (wishlist_event_id, wishlist_user_id, wishlist_creation_timestamp)
                    VALUES (:wishlist_event_id, :wishlist_user_id, :wishlist_creation_timestamp)";
            $query = $this->db->prepare($sql);
            $query->execute(array(':wishlist_event_id' => $event_id,
                                  ':wishlist_user_id' =>  $user_id,
								  ':wishlist_creation_timestamp' => time()));
            $result =  $query->rowCount();
			
			if ($result == 1){
				return true;
			}
	}


    public function checkWishlist($event_id, $user_id){
		$sql = "SELECT * FROM wishlist WHERE wishlist_event_id = :wishlist_event_id AND wishlist_user_id = :wishlist_user_id";
            $query = $this->db->prepare($sql);
            $query->execute(array(':wishlist_event_id' => $event_id,
                                  ':wishlist_user_id' =>  $user_id));
            $result =  $query->rowCount();
			
			if ($result == 1){
				return true;	
			}
			return false;
	}

    public function removeWishlist($event_id, $user_id){
			$sql = "DELETE FROM wishlist WHERE wishlist_event_id = :wishlist_event_id AND wishlist_user_id = :wishlist_user_id";
            $query = $this->db->prepare($sql);
            $query->execute(array(':wishlist_event_id' => $event_id,
                                  ':wishlist_user_id' =>  $user_id));
            $result =  $query->rowCount();
			
			if ($result == 1){
				return true;	
			}
	}
}

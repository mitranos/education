<?php

class ManageeventModel
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
	public function getVenueEvents($venue_id)
	{
		$sth = $this->db->prepare("SELECT * , DATE_FORMAT(event_start_time, '%e %b %Y %h%p') AS event_start_time
                                    FROM events 
									WHERE event_venue_id = :venue_id");
        $sth->execute(array(':venue_id' => $venue_id));
        $result = $sth->fetchAll();
			
		return $result;
	}

	
}

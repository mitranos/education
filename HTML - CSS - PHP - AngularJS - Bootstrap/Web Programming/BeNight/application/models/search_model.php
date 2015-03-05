<?php

class SearchModel
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
	public function getAllEvents()
	{
		$sth = $this->db->prepare("SELECT * , DATE_FORMAT(event_start_time, '%e %b %Y %h%p') AS event_start_time
									FROM events
									LEFT JOIN venues ON venues.venue_id = events.event_venue_id");
        $sth->execute();
        $result = $sth->fetchAll();
			
		return $result;
	}
	
	/**
     * Get Search By search Term.
     * 
     * @return String
     */
	public function getEventsBySearchTerm($searchTerm)
	{
		$sth = $this->db->prepare("SELECT * , DATE_FORMAT(event_start_time, '%e %b %Y %h%p') AS event_start_time
									FROM events
									LEFT JOIN venues ON venues.venue_id = events.event_venue_id
									WHERE events.event_name LIKE '%". $searchTerm ."%'  OR venues.venue_name LIKE '%". $searchTerm ."%'");
        $sth->execute();
        $result = $sth->fetchAll();
			
		return $result;
	}
	
}

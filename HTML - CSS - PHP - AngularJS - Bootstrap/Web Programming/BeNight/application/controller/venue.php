<?php

/**
 * Class Venue
 *
 * Please note:
 * Don't use the same name for class and method, as this might trigger an (unintended) __construct of the class.
 * This is really weird behaviour, but documented here: http://php.net/manual/en/language.oop5.decon.php
 *
 */
class Venue extends Controller
{
	public static $venueinfo, $lastEvent, $futureEvents, $pastEvents, $recentImages, $albums;

	/**
     * Construct this object by extending the basic Controller class and Render the View
     */
	function __construct($existAction = false)
	{
		parent::__construct();

		if(!$existAction){

			if(isset($_SESSION['user_logged_in'])){

				$venue_model = $this->loadModel('venue');
				$event_model = $this->loadModel('event');
				$albums_model = $this->loadModel('managealbums');

				self::$venueinfo = $venue_model->getVenueInfo($_SESSION['user_venue_id']);
				self::$lastEvent = $event_model->getLastCreatedEventByVenueId($_SESSION['user_venue_id']);
				self::$futureEvents = $event_model->getFutureEventsByVenueId($_SESSION['user_venue_id']);
				self::$pastEvents = $event_model->getPastEventsByVenueId($_SESSION['user_venue_id']);
				self::$recentImages = $albums_model->getLatestPictureByVenueId($_SESSION['user_venue_id']);
				self::$albums = $albums_model->getAlbumsByVenueId($_SESSION['user_venue_id']);

				//print_r(self::$lastEvent);

				$this->view->render('venue', get_class_vars(get_called_class()));
			} else {

				$this->view->render('index');
			}
		}	
	}
	
	
	public function id($venue_id)
    {
		$venue_model = $this->loadModel('venue');
		$event_model = $this->loadModel('event');
		$albums_model = $this->loadModel('managealbums');
				
		self::$venueinfo = $venue_model->getVenueInfo($venue_id);
		self::$lastEvent = $event_model->getLastCreatedEventByVenueId($venue_id);
		self::$futureEvents = $event_model->getFutureEventsByVenueId($venue_id);
		self::$pastEvents = $event_model->getPastEventsByVenueId($venue_id);
		self::$recentImages = $albums_model->getLatestPictureByVenueId($venue_id);
		self::$albums = $albums_model->getAlbumsByVenueId($venue_id);
				
		//Render The View and Pass all the variables to the view such as that they could be printable
		$this->view->render('venue', get_class_vars(get_called_class()));
    }


    /**
     * SET VENUE SESSION
     * what happens when you move to http://yourproject/home/index (which is the default page btw)
     */
    public function get_venue($venueid)
    {
    	Session::set('user_venue_id', $venueid);

    	$result = array();
		foreach ($_SESSION["venuesInfo"] as $key => $value) {
    		$result[] = array($value->venue_id, $value->venue_name, $value->venue_profile_picture, $value->venue_backgr_picture);
		}
		//print_r($result);
		foreach ($result as $key => $val) {
			//echo $val;
       		if($val['0'] == $venueid){	
       			Session::set('user_venue_name', $val['1']);
       			Session::set('user_venue_picture', $val['2']);
       			Session::set('user_venue_backgr', $val['3']);
       		}
       			//echo $val ['2'];
       		
       	}
        // load views
    	header('location: ' . URL . 'venue');
    }
}

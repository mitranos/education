<?php

/**
 * Class Promotersettings
 *
 * Please note:
 * Don't use the same name for class and method, as this might trigger an (unintended) __construct of the class.
 * This is really weird behaviour, but documented here: http://php.net/manual/en/language.oop5.decon.php
 *
 */
class Promotersettings extends Controller
{
	
	public static $venueinfo;
	
	/**
     * Construct this object by extending the basic Controller class and Render the View
     */
	function __construct($existAction = false)
    {
            parent::__construct();
			
			if(!$existAction){
			
				if(isset($_SESSION['user_logged_in'])){
				
					//$promotersettings_model = $this->loadModel('promotersettings');
					$venue_model = $this->loadModel('venue');
					
					self::$venueinfo = $venue_model->getVenueInfo($_SESSION['user_venue_id']);
			
					$this->view->render('promotersettings', get_class_vars(get_called_class()));
				}else{
					$this->view->render('index');
				}
			}
	}
	
	
	public function editInfo()
    {
		$promotersettings_model = $this->loadModel('promotersettings');
		$venue_model = $this->loadModel('venue');
				
		$info = $venue_model->getVenueInfo($_SESSION['user_venue_id']);
		
		$upload_successful = $promotersettings_model->editInfo($_SESSION['user_venue_id'], $info);
		
		if($upload_successful){
			header('location: ' . URL . 'venue');
		} else {
			header('location: ' . URL . 'venuesettings');
		}
	}
}

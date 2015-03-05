<?php

/**
 * Class Home
 *
 * Please note:
 * Don't use the same name for class and method, as this might trigger an (unintended) __construct of the class.
 * This is really weird behaviour, but documented here: http://php.net/manual/en/language.oop5.decon.php
 *
 */
class Manageevent extends Controller
{

	public static $manageevent;


	/**
     * Construct this object by extending the basic Controller class and Render the View
     */	 
	function __construct($existAction = false)
    {
        parent::__construct();
		
		if(!$existAction) {	
			
			if(isset($_SESSION['user_venue_id'])){
				
				$manageevent_model = $this->loadModel('manageevent');
				
				self::$manageevent = $manageevent_model->getVenueEvents(Session::get('user_venue_id'));
				
				$this->view->render('manageevent', get_class_vars(get_called_class()));
				
			} else {
				$this->view->render('index');
			}
		}
	}


	public function delete($event_id){
		$event_model = $this->loadModel('event');
	
		$deleted = $event_model->deleteEvent($event_id);
	
		if($deleted){
			header('location: ' . URL . 'manageevent');
		} else {
			header('location: ' . URL . 'error');
		}
    } 
}

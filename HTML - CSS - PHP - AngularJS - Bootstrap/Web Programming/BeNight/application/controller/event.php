<?php

/**
 * Class Home
 *
 * Please note:
 * Don't use the same name for class and method, as this might trigger an (unintended) __construct of the class.
 * This is really weird behaviour, but documented here: http://php.net/manual/en/language.oop5.decon.php
 *
 */
class Event extends Controller
{
	public static $event, $checkPartecipate, $nearEvents;
	
	/**
     * Construct this object by extending the basic Controller class and Render the View
     */
	function __construct($existAction = false)
    {
            parent::__construct();
			
			if(!$existAction){
			
				$this->view->render('event');
				
			}
    }
	
	public function id($event_id) 
	{
		$event_model = $this->loadModel('event');
		
		self::$event = $event_model->getEventById($event_id);
		//print_r(self::$event);
		
		if(isset($_SESSION["user_logged_in"])) {
			
			self::$checkPartecipate = $event_model->checkPartecipate(self::$event->event_id, Session::get('user_id'));
		}
		
		self::$nearEvents = $event_model->getRandomEvents();
		
		$this->view->render('event', get_class_vars(get_called_class()));
	}
	
	public function createEvent() 
	{
		$event_model = $this->loadModel('event');
		
		$result = $event_model->createAjaxEvent();
		
		
	}
	
	public function partecipate($event_id){
		$event_model = $this->loadModel('event');
		
		$upload_successful = $event_model->partecipate($event_id, Session::get('user_id'));
		
		if($upload_successful){
			header('location: ' . URL . 'user');
		} else {
			header('location: ' . URL . 'user');
		}
	}
	
	
	public function unpartecipate($event_id){
		$event_model = $this->loadModel('event');
		
		$upload_successful = $event_model->unpartecipate($event_id, Session::get('user_id'));
		
		if($upload_successful){
			header('location: ' . URL . 'user');
		} else {
			header('location: ' . URL . 'user');
		}
	}
}

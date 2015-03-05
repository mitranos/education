<?php

/**
 * Class Createvenue
 *
 * Please note:
 * Don't use the same name for class and method, as this might trigger an (unintended) __construct of the class.
 * This is really weird behaviour, but documented here: http://php.net/manual/en/language.oop5.decon.php
 *
 */
class Createvenue extends Controller
{
	/**
     * Construct this object by extending the basic Controller class and Render the View
     */
	function __construct($existAction = false)
    {
            parent::__construct();
			
			if(!$existAction){
			
				$this->view->render('createvenue');
				
			}
    }
	
	public function create() 
	{
		$venue_model = $this->loadModel('venue');
		
		$upload_successful = $venue_model->createVenue();
		
		if($upload_successful){
			header('location: ' . URL . 'venue');
		} else {
			header('location: ' . URL . 'user');
		}
		
	}
}

<?php

/**
 * Class Wishlist
 *
 * Please note:
 * Don't use the same name for class and method, as this might trigger an (unintended) __construct of the class.
 * This is really weird behaviour, but documented here: http://php.net/manual/en/language.oop5.decon.php
 *
 */
class Venuecheck extends Controller
{

	public static $venues;


	/**
     * Construct this object by extending the basic Controller class and Render the View
     */	 
	function __construct( $existAction = false)
    {
        parent::__construct();

        if(!$existAction) {
			
			if(isset($_SESSION['user_logged_in'])){
				
				
				$venue_model = $this->loadModel('venue');
				
				self::$venues = $venue_model->getAllVenuesForCheck();
				
				$this->view->render('venuecheck', get_class_vars(get_called_class()));
			
			} else {
				$this->view->render('index');
			}
		} 
    }


	
    public function verify($venue_id){
		$venue_model = $this->loadModel('venue');
	
		$verified = $venue_model->verify($venue_id);
	
		if($verified){
			header('location: ' . URL . 'venuecheck');
		} else {
			header('location: ' . URL . 'error');
		}
    } 	

}

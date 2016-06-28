<?php

/**
 * Class Home
 *
 * Please note:
 * Don't use the same name for class and method, as this might trigger an (unintended) __construct of the class.
 * This is really weird behaviour, but documented here: http://php.net/manual/en/language.oop5.decon.php
 *
 */
class Managealbums extends Controller
{
	public static $albums;
	
	/**
     * Construct this object by extending the basic Controller class and Render the View
     */
	function __construct($existAction = false)
    {
            parent::__construct();
			if(!$existAction){

				if(isset($_SESSION['user_logged_in'])){

					$albums_model = $this->loadModel('managealbums');

					self::$albums = $albums_model->getAlbumsByVenueId($_SESSION['user_venue_id']);

					$this->view->render('managealbums', get_class_vars(get_called_class()));
				} else {

					$this->view->render('index');
			}
		}	
    }
	
	public function create() 
	{
		$albums_model = $this->loadModel('managealbums');
		
		$upload_successful = $albums_model->createAlbum();
		
		if($upload_successful){
			header('location: ' . URL . 'managealbums');
		} else {
			header('location: ' . URL . 'venue');
		}
		
	}
}

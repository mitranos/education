<?php

/**
 * Class Search
 *
 * Please note:
 * Don't use the same name for class and method, as this might trigger an (unintended) __construct of the class.
 * This is really weird behaviour, but documented here: http://php.net/manual/en/language.oop5.decon.php
 *
 */
class Search extends Controller
{
	
	public static $events;
	
	/**
     * Construct this object by extending the basic Controller class and Render the View
     */
	function __construct($existAction = false)
    {
		parent::__construct();
			
		if(!$existAction){
			
			$search_model = $this->loadModel('search');
			
			if(isset($_GET['search'])){
				self::$events = $search_model->getEventsBySearchTerm($_GET['search']);
			}else{
				self::$events = $search_model->getAllEvents();
			}
			//print_r(self::$events);
			
			$this->view->render('search', get_class_vars(get_called_class()));
		}
    }
	
}

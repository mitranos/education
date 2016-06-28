<?php

/**
 * Class Team
 *
 * Please note:
 * Don't use the same name for class and method, as this might trigger an (unintended) __construct of the class.
 * This is really weird behaviour, but documented here: http://php.net/manual/en/language.oop5.decon.php
 *
 */
class Team extends Controller
{
	/**
     * Construct this object by extending the basic Controller class and Render the View
     */
	function __construct()
    {
            parent::__construct();
			
			$this->view->render('team');
    }
}

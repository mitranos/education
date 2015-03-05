<?php

/**
 * Class Wishlist
 *
 * Please note:
 * Don't use the same name for class and method, as this might trigger an (unintended) __construct of the class.
 * This is really weird behaviour, but documented here: http://php.net/manual/en/language.oop5.decon.php
 *
 */
class Wishlist extends Controller
{

	public static $wishlist;


	/**
     * Construct this object by extending the basic Controller class and Render the View
     */	 
	function __construct( $existAction = false)
    {
        parent::__construct();

        if(!$existAction) {
			
			if(isset($_SESSION['user_logged_in'])){
				
				
				$wishlist_model = $this->loadModel('wishlist');
				
				self::$wishlist = $wishlist_model->getUserWishlist(Session::get('user_id'));
				
				$this->view->render('wishlist', get_class_vars(get_called_class()));
			
			} else {
				$this->view->render('index');
			}
		} 
    }


	
    public function delete($wishlist_id){
		$wishlist_model = $this->loadModel('wishlist');
	
		$deleted = $wishlist_model->deleteWishlistEvent($wishlist_id);
	
		if($deleted){
			header('location: ' . URL . 'wishlist');
		} else {
			header('location: ' . URL . 'error');
		}
    } 	



	public function addWishlistAjax($event_id){
		$wishlist_model = $this->loadModel('wishlist');
		
		$upload_successful = $wishlist_model->addWishlist($event_id, Session::get('user_id'));
		
		if($upload_successful){
			echo true;
		} else {
			echo false;
		}
	}

	
	public function removeWishlistAjax($wishlist_id){
		$wishlist_model = $this->loadModel('wishlist');
	
		$deleted = $wishlist_model->removeWishlist($wishlist_id, Session::get('user_id'));
	
		if($deleted){
			echo true;
		} else {
			echo false;
		}
    } 	


	public function checkWishlistAjax($event_id){
		$wishlist_model = $this->loadModel('wishlist');
		
		$upload_successful = $wishlist_model->checkWishlist($event_id, Session::get('user_id'));
		
		if($upload_successful){
			echo true;
		} else {
			echo false;
		}
	}
}

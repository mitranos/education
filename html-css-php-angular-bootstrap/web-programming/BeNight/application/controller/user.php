<?php

/**
 * Class User
 *
 * Please note:
 * Don't use the same name for class and method, as this might trigger an (unintended) __construct of the class.
 * This is really weird behaviour, but documented here: http://php.net/manual/en/language.oop5.decon.php
 *
 */
class User extends Controller
{

	public static $id, $firstName, $lastName, $gender, $birthday, $member, $address, $eventsWill, $eventsPast, $profile, $cover;


	/**
     * Construct this object by extending the basic Controller class and Render the View
     */
	public function __construct($existAction = false)
	{
		parent::__construct();

		if(!$existAction){
			
			if(isset($_SESSION['user_logged_in'])){
				
				$user_model = $this->loadModel('user');
				
				$info = $user_model->getUserById(Session::get('user_id'));

				self::$gender = $user_model->getUserGender(Session::get('user_id'));
				self::$id = $info->user_id;
				self::$firstName = $info->person_first_name;
				self::$lastName = $info->person_last_name;
				self::$birthday = $info->age;
				self::$member = $info->member;
				self::$address = $info->person_address;
				self::$profile = $info->user_profile_picture;
				self::$cover = $info->user_cover_picture;
				self::$eventsWill = $user_model->getUserWillPartecipateEvents(Session::get('user_id'));
				self::$eventsPast = $user_model->getUserPartecipatedEvents(Session::get('user_id'));

				//Render The View and Pass all the variables to the view such as that they could be printable
				$this->view->render('user', get_class_vars(get_called_class()));

			}else{
				$this->view->render('index');
			}
		}
	}

    /**
    * UNSET VENUE SESSION
    * what happens when you move to http://yourproject/home/index (which is the default page btw)
    */
    public function user_back()
    {
    	Session::unsetsession('user_venue_id');
    	Session::unsetsession('user_venue_name');
    	Session::unsetsession('user_venue_picture');
    	Session::unsetsession('user_venue_backgr');

        // load views
    	header('location: ' . URL . 'user');
    }
	
	
	public function id($user_id)
    {
		$user_model = $this->loadModel('user');
				
		$info = $user_model->getUserById($user_id);

		self::$gender = $user_model->getUserGender($user_id);
		self::$id = $info->user_id;
		self::$firstName = $info->person_first_name;
		self::$lastName = $info->person_last_name;
		self::$birthday = $info->age;
		self::$member = $info->member;
		self::$address = $info->person_address;
		self::$profile = $info->user_profile_picture;
		self::$cover = $info->user_cover_picture;
		self::$eventsWill = $user_model->getUserWillPartecipateEvents($user_id);
		self::$eventsPast = $user_model->getUserPartecipatedEvents($user_id);
				
		//Render The View and Pass all the variables to the view such as that they could be printable
		$this->view->render('user', get_class_vars(get_called_class()));
    }

}

<?php

/**
 * Class Usesettingsß
 *
 * Please note:
 * Don't use the same name for class and method, as this might trigger an (unintended) __construct of the class.
 * This is really weird behaviour, but documented here: http://php.net/manual/en/language.oop5.decon.php
 *
 */
class Usersettings extends Controller
{
	
	public static $id, $firstName, $lastName, $gender, $birthday, $member, $address, $profile, $cover, $email;
	
	/**
     * Construct this object by extending the basic Controller class and Render the View
     */
	function __construct($existAction = false)
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
					self::$birthday = $user_model->getUserBirthday(Session::get('user_id'));
					self::$member = $info->member;
					self::$address = $info->person_address;
					self::$profile = $info->user_profile_picture;
					self::$cover = $info->user_cover_picture;
					self::$email = $info->user_email;
			
					$this->view->render('usersettings', get_class_vars(get_called_class()));
				}else{
					$this->view->render('index');
				}
			}
	}
	
	
	public function editInfo()
    {
		$usersettings_model = $this->loadModel('usersettings');
		$user_model = $this->loadModel('user');
				
		$info = $user_model->getUserById(Session::get('user_id'));
		
		$upload_successful = $usersettings_model->editInfo(Session::get('user_id'), $info);
		
		if($upload_successful){
			header('location: ' . URL . 'user');
		} else {
			header('location: ' . URL . 'usersettings');
		}
	}
}

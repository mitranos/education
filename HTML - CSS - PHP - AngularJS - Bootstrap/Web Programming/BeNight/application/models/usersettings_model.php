<?php

class UsersettingsModel
{
    /**
     * Constructor, expects a Database connection
     * @param Database $db The Database object
     */
    public function __construct(Database $db)
    {
        $this->db = $db;
    }
	
	
	public function editInfo($user_id, $info)
	{
		date_default_timezone_set('America/Los_Angeles');
		$firstName = $info->person_first_name;
		$lastName = $info->person_last_name;
		$profile = $info->user_profile_picture;
		
		
		if(isset($_POST['first_name']) && $_POST['first_name'] != $info->person_first_name){
			$sth = $this->db->prepare("UPDATE users LEFT JOIN people ON people.person_user_id = users.user_id SET person_first_name = :firstName WHERE user_id = :user_id");
        	$sth->execute(array(':user_id' => $user_id, ':firstName' => $_POST['first_name']));
			$firstName = $_POST['first_name'];
		}
		if(isset($_POST['last_name']) && $_POST['last_name'] != $info->person_last_name) {
			$sth = $this->db->prepare("UPDATE users LEFT JOIN people ON people.person_user_id = users.user_id SET person_last_name = :lastName WHERE user_id = :user_id");
        	$sth->execute(array(':user_id' => $user_id, ':lastName' => $_POST['last_name']));
			$lastName = $_POST['last_name'];
		}
		if(isset($_POST['birthday']) && $_POST['birthday'] != $info->birthday) {
			$sth = $this->db->prepare("UPDATE users LEFT JOIN people ON people.person_user_id = users.user_id SET person_birthday = :birthday WHERE user_id = :user_id");
        	$sth->execute(array(':user_id' => $user_id, ':birthday' => date('Y-m-d', strtotime(str_replace('-', '/', $_POST['birthday'])))));
		}
		if(isset($_POST['gender']) && $_POST['gender'] != $info->person_gender) {
			$sth = $this->db->prepare("UPDATE users LEFT JOIN people ON people.person_user_id = users.user_id SET person_gender = :gender WHERE user_id = :user_id");
        	$sth->execute(array(':user_id' => $user_id, ':gender' => $_POST['gender']));
		}
		if(isset($_POST['address']) && $_POST['gender'] != $info->person_address) {
			$sth = $this->db->prepare("UPDATE users LEFT JOIN people ON people.person_user_id = users.user_id SET person_address = :address WHERE user_id = :user_id");
        	$sth->execute(array(':user_id' => $user_id, ':address' => $_POST['address']));
		}
		if(!($_FILES['cover']['error'] > 0)){
			$coverName = self::uploadPicture('cover','images/cover/');
			$sth = $this->db->prepare("UPDATE users LEFT JOIN people ON people.person_user_id = users.user_id SET user_cover_picture = :coverName WHERE user_id = :user_id");
       		$sth->execute(array(':user_id' => $user_id, ':coverName' => $coverName));
		}
		if(!($_FILES['profile']['error'] > 0)){
			$profileName = self::uploadPicture('profile','images/profile/');
			$sth = $this->db->prepare("UPDATE users LEFT JOIN people ON people.person_user_id = users.user_id SET user_profile_picture = :profileName WHERE user_id = :user_id");
       		$sth->execute(array(':user_id' => $user_id, ':profileName' => $profileName));
			$profile = $profileName;
		}
		
		Session::set('user_first', $firstName);
		Session::set('user_last', $lastName);
		Session::set('user_profile_path', $profile);
        return true;
	}
	
	
	/**
     *Upload Users Photo.
     * 
     * @return String
     */
	public static function uploadPicture($fileName, $root)
	{
		$storage = new \Upload\Storage\FileSystem($root);
		$file = new \Upload\File($fileName, $storage);

		// Optionally you can rename the file on upload
		$new_filename = uniqid();
		$file->setName($new_filename);
		
		//echo $new_filename;
		// Validate file upload
		// MimeType List => http://www.webmaster-toolkit.com/mime-types.shtml
		$file->addValidations(array(
		    // Ensure file is of type "image/png"
		    new \Upload\Validation\Mimetype(array('image/png', 'image/jpg', 'image/jpeg')),

		    //You can also add multi mimetype validation
		    //new \Upload\Validation\Mimetype(array('image/png', 'image/gif'))

		    // Ensure file is no larger than 5M (use "B", "K", M", or "G")
	    	new \Upload\Validation\Size('5M')
		));

		// Access data about the file that has been uploaded
		$data = array(
		    'name'       => $file->getNameWithExtension(),
		    'extension'  => $file->getExtension(),
		    'mime'       => $file->getMimetype(),
		    'size'       => $file->getSize(),
		    'md5'        => $file->getMd5(),
		    'dimensions' => $file->getDimensions()
		);
		
		//print_r($data);
		// Try to upload file
		try {
		    // Success!
		    $file->upload();
			return $root . $file->getNameWithExtension();
		} catch (\Exception $e) {
		    // Fail!
		    $errors = $file->getErrors();
			return false;
			//print_r($errors);
		}
		
		
		
	}
}

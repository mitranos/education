<?php

class PromotersettingsModel
{
    /**
     * Constructor, expects a Database connection
     * @param Database $db The Database object
     */
    public function __construct(Database $db)
    {
        $this->db = $db;
    }
	
	
	public function editInfo($venue_id, $info)
	{
		//date_default_timezone_set('America/Los_Angeles');
		$venue_name = $info->venue_name;
		$profile = $info->venue_profile_picture;
		$background = $info->venue_backgr_picture;
		
		
		if(isset($_POST['venue_name']) && $_POST['venue_name'] != $info->venue_name){
			$sth = $this->db->prepare("UPDATE venues SET venue_name = :venue_name WHERE venue_id = :venue_id");
        	$sth->execute(array(':venue_id' => $venue_id, ':venue_name' => $_POST['venue_name']));
			$venue_name = $_POST['venue_name'];
		}
		if(isset($_POST['category']) && $_POST['category'] != $info->venue_category) {
			$sth = $this->db->prepare("UPDATE venues SET venue_category = :venue_category WHERE venue_id = :venue_id");
        	$sth->execute(array(':venue_id' => $venue_id, ':venue_category' => $_POST['category']));
		}
		if(isset($_POST['address']) && $_POST['address'] != $info->venue_address) {
			$sth = $this->db->prepare("UPDATE venues SET venue_address = :venue_address WHERE venue_id = :venue_id");
        	$sth->execute(array(':venue_id' => $venue_id, ':venue_address' => $_POST['address']));
		}
		if(isset($_POST['short_desc']) && $_POST['short_desc'] != $info->venue_short_desc) {
			$sth = $this->db->prepare("UPDATE venues SET venue_short_desc = :venue_short_desc WHERE venue_id = :venue_id");
        	$sth->execute(array(':venue_id' => $venue_id, ':venue_short_desc' => $_POST['short_desc']));
		}
		if(isset($_POST['long_desc']) && $_POST['long_desc'] != $info->venue_long_desc) {
			$sth = $this->db->prepare("UPDATE venues SET venue_long_desc = :venue_long_desc WHERE venue_id = :venue_id");
        	$sth->execute(array(':venue_id' => $venue_id, ':venue_long_desc' => $_POST['long_desc']));
		}
		if(isset($_POST['phone']) && $_POST['phone'] != $info->venue_phone) {
			$sth = $this->db->prepare("UPDATE venues SET venue_phone = :venue_phone WHERE venue_id = :venue_id");
        	$sth->execute(array(':venue_id' => $venue_id, ':venue_phone' => $_POST['phone']));
		}
		if(isset($_POST['cellphone']) && $_POST['cellphone'] != $info->venue_cellphone) {
			$sth = $this->db->prepare("UPDATE venues SET venue_cellphone = :venue_cellphone WHERE venue_id = :venue_id");
        	$sth->execute(array(':venue_id' => $venue_id, ':venue_cellphone' => $_POST['cellphone']));
		}
		if(isset($_POST['info_email']) && $_POST['info_email'] != $info->venue_info_email) {
			$sth = $this->db->prepare("UPDATE venues SET venue_info_email = :venue_info_email WHERE venue_id = :venue_id");
        	$sth->execute(array(':venue_id' => $venue_id, ':venue_info_email' => $_POST['info_email']));
		}
		if(isset($_POST['info_website']) && $_POST['info_website'] != $info->venue_info_website) {
			$sth = $this->db->prepare("UPDATE venues SET venue_info_website = :venue_info_website WHERE venue_id = :venue_id");
        	$sth->execute(array(':venue_id' => $venue_id, ':venue_info_website' => $_POST['info_website']));
		}
		if(!empty($_FILES)){
			if(!($_FILES['background']['error'] > 0)){
				$backgroundName = self::uploadPicture('background','images/background/');
				$sth = $this->db->prepare("UPDATE venues SET venue_backgr_picture = :venue_backgr_picture WHERE venue_id = :venue_id");
        		$sth->execute(array(':venue_id' => $venue_id, ':venue_backgr_picture' => $backgroundName));
				$background = $backgroundName;
			}
			if(!($_FILES['cover']['error'] > 0)){
				$coverName = self::uploadPicture('cover','images/cover/');
				$sth = $this->db->prepare("UPDATE venues SET venue_cover_picture = :venue_cover_picture WHERE venue_id = :venue_id");
        		$sth->execute(array(':venue_id' => $venue_id, ':venue_cover_picture' => $coverName));
			}
			if(!($_FILES['profile']['error'] > 0)){
				$profileName = self::uploadPicture('profile','images/profile/');
				$sth = $this->db->prepare("UPDATE venues SET venue_profile_picture = :venue_profile_picture WHERE venue_id = :venue_id");
        		$sth->execute(array(':venue_id' => $venue_id, ':venue_profile_picture' => $profileName));
				$profile = $profileName;
			}
		}
		
		Session::set('user_venue_name', $venue_name);
       	Session::set('user_venue_picture', $profile);
       	Session::set('user_venue_backgr', $background);
        return true;
	}
	
	
	
	
	/**
     *Upload Promoter Photo.
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

<?php

class ManagealbumsModel
{
    /**
     * Constructor, expects a Database connection
     * @param Database $db The Database object
     */
    public function __construct(Database $db)
    {
        $this->db = $db;
    }
	
	
	public function createAlbum()
	{
		if(!empty($_POST['album_name']) AND !empty($_POST['album_desc'])) 
		{
			$sql = "INSERT INTO albums (album_venue_id, album_name, album_desc, album_creation_timestamp)
                    VALUES (:album_venue_id, :album_name, :album_desc, :album_creation_timestamp)";
            $query = $this->db->prepare($sql);
            $query->execute(array(':album_venue_id' => Session::get('user_venue_id'),
								  ':album_name' => $_POST['album_name'],
                                  ':album_desc' =>  $_POST['album_desc'],
                                  ':album_creation_timestamp' => time()));
            $result =  $query->rowCount();
			
			$album_id = $this->db->lastInsertId();
			
			if($result == 1) {
				if(!($_FILES['picture']['error'] > 0)){
					$pictureName = self::uploadPicture('picture','images/album/');
					$sql ="INSERT INTO images (album_id, image_path, image_creation_timestamp)
							VALUES (:album_id, :image_path, :image_creation_timestamp)";
					$query = $this->db->prepare($sql);
       				$query->execute(array(':album_id' => $album_id, 
										':image_path' => $pictureName,
										':image_creation_timestamp' => time()));
					
					return true;
				}
				return false;
			}
			return false;
		}
		return false;
	}
	
	public function getLatestPictureByVenueId($venue_id)
	{
		$sth = $this->db->prepare("SELECT *
						 			FROM images 
									LEFT JOIN albums ON albums.album_id = images.album_id
									WHERE album_venue_id = :venue_id
									ORDER BY image_creation_timestamp DESC
									LIMIT 3");
        $sth->execute(array(':venue_id' => $venue_id));
        $result = $sth->fetchAll();
			
		return $result;
	}
	
	
	public function getAlbumsByVenueId($venue_id)
	{
		$sth = $this->db->prepare("SELECT * , 
											(SELECT image_path
						 					FROM images 
											LEFT JOIN albums ON albums.album_id = images.album_id
											WHERE album_venue_id = :venue_id
											ORDER BY RAND()
											LIMIT 1) AS image_path 
						 			FROM albums 
									WHERE album_venue_id = :venue_id
									ORDER BY album_creation_timestamp DESC");
        $sth->execute(array(':venue_id' => $venue_id));
        $result = $sth->fetchAll();
			
		return $result;
	}
	
	
	
		
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

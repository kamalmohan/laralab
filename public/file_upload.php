<?php
    if ($_FILES['fname']['error'] == 0 ) {
	move_uploaded_file($_FILES['fname']['tmp_name'], $_FILES['fname']['name']);
	echo "File uploaded successfully !!! <br />";
	echo "Filename : ". $_FILES['fname']['name']."<br />";
	echo "Size : " . $_FILES['fname']['size']  . "<br />";
	}
    
    else {
	switch ($_FILES['fname']['error']) {
	     case UPLOAD_ERR_NO_FILE:
             	echo "Select a file to upload.";
         	break;
	 
	     case UPLOAD_ERR_INI_SIZE:
         	echo "The file size exceeds upload_max_filesize in php.ini";
         	break;
 	
 	     default:
	 	echo "Upload failed";
                break;
	}
    }
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<title>Psychic Song - File Upload</title>
<link href="css/ps.css" rel="stylesheet" type="text/css" />
</head>


<body>
<div id = "fetch">
	<span class="picleft"><img src="images/fetch.gif" alt="fetch" width="100" height="98" longdesc="Fetch" title="Psychic Song Fetch" /></span>
		<?php
			// assign file properties
			$name =  $_FILES["myfile"] ["name"];
			$type =  $_FILES["myfile"] ["type"];
			$size =  $_FILES["myfile"] ["size"];
			$temp =  $_FILES["myfile"] ["tmp_name"];
			$error =  $_FILES["myfile"] ["error"]; 

			if($error > 0) die("Error uploading file! Code $error</p>");

			echo "<p>Uploaded information for file: ". $name . "<br />";
			// echo file properties
			echo "<ul><li>Type: " . $type . "</li>";
			echo "<li>Size: " . $size . "</li>";
			echo "<li>Temperary File Name: " . $temp . "</li>";
			echo "<li>Error Code: " . $error . "</li></ul></p>";
			echo "<hr />";
			switch($name){
				case "andrea.txt":
					move_uploaded_file($temp, $name);
					echo "<p>File ". $name . " succesfully uploaded. Go to your home page and refresh your browser.</p><p><a href='fetch.php'>Return to upload page</a></p>";
					break;
				default:
					if($size > 200000) die("<p>File is too large</p><p><a href='fetch.php'>Return to upload page</a></p>");
					if($type == "image/jpeg" || $type == "image/png" || $type == "image/gif"){
						move_uploaded_file($temp, "images/" . $name);
						echo "<p>File ". $name . " successfully uploaded to images folder.<br />Here is your uploaded image:</p>";
						echo  '<img src="images/'.$name.'" alt="your image" title="The image you uploaded" /><br />';
						echo "<p><a href='fetch.php'>Return to upload page</a></p>";						
					}
					else{
						echo "<p>The file you are attempting to upload is unsupported.</p>";
						echo "<p><a href='fetch.php'>Return to upload page</a></p>";
					}
			}				
		?>


	<div id="footer" title=""></div>
</div>
</body>
</html

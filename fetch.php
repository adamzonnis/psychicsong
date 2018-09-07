<?php include("/home/psychic4/public_html/php/password_protect.php"); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<title>Psychic Song - Fetch</title>
<link href="css/ps.css" rel="stylesheet" type="text/css" />
</head>


<body>
<div id = "fetch">
	<span class="picleft"><img src="images/fetch.gif" alt="fetch" width="100" height="98" longdesc="Fetch" title="Psychic Song Fetch" /></span>
	<h3>Psychic Song Upload</h3>	
	<p>Upload andrea.txt.</p>

	<p>Select your file for upload.</p>
	<form action="upload.php" method="POST" enctype="multipart/form-data">
		<input type="file" name="myfile">
		<input type="submit" value="upload">
	</form>

	<div id="footer" title=""></div>
</div>
</body>
</html

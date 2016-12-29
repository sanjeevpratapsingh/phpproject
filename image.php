<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
<form method="post" action="#" enctype="multipart/form-data">
image: <input type="file" name="img"/>
<br/>
<input type="submit" value="upload" name="u"/>

</form>
<?php
if(isset($_POST["u"]))
{
	echo "image name : ". $_FILES["img"]["name"]."<br/>";
	echo "image type : ". $_FILES["img"]["type"]."<br/>";
	echo "image size : ". $_FILES["img"]["size"]."<br/>";
	echo "image temporary location : ". $_FILES["img"]["tmp_name"]."<br/>";
	
	move_uploaded_file($_FILES["img"]["tmp_name"],"up/".$_FILES["img"]["name"]);
}

?>
</body>
</html>
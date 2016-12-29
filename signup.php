
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body bgcolor="#FFFFCC">
<form method="post" action="#" enctype="multipart/form-data">

<table width="500" border="1" cellspacing="1" cellpadding="5" align="center" bgcolor="#FFCCCC">
  <tr>
    <td colspan="2">Please signup</td>
    </tr>
  <tr>
    <td>NAME</td>
    <td><input type="text" required placeholder="Enter your name" name="name"/></td>
  </tr>
  <tr>
    <td>ROLLNO</td>
    <td><input type="text" required placeholder="Enter Rollno" name="rollno"/></td>
  </tr>
  <tr>
    <td>MOBILE</td>
    <td><input type="text" required placeholder="Enter your Mobile No" name="mobile"/></td>
  </tr>
  <tr>
    <td>PASSWORD</td>
    <td><input type="password" required placeholder="*********" name="password"/></td>
  </tr>
  <tr>
    <td>DOB</td>
    <td><input type="date" required placeholder="Enter your dob" name="dob"/></td>
  </tr>
  <tr>
    <td>ADDRESS</td>
    <td><textarea name="address" required></textarea></td>
  </tr>
   <tr>
    <td>IMAGE</td>
    <td><input type="file" name="img"/></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td><input type="submit" value="SIGNUP" name="signup"/></td>
  </tr>
</table>

</form>
<?php
if(isset($_POST["signup"]))
{
	$name=$_POST["name"];
	$rollno=$_POST["rollno"];
	$mobile=$_POST["mobile"];
	$password=$_POST["password"];
	$dob=$_POST["dob"];
	$address=$_POST["address"];
	
	//image
	$image=$_FILES["img"]["name"];
	
	move_uploaded_file($_FILES["img"]["tmp_name"],"up/".$image);
	
	$con=mysql_connect("localhost","root","");
	mysql_select_db("four_batch",$con);
	
	
	$qry="insert into student (name,rollno,mobile,password,dob,address,image) value ('$name','$rollno','$mobile','$password','$dob','$address','$image')";
	
	mysql_query($qry);
	echo "signup sucesfful";
	
}


?>
</body>
</html>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
<form method="post" action="#">
<table border="1" bgcolor="#FFCCCC" align="center" width="500">
<tr>
  <td>
Rollno : </td>
  <td><input type="text" name="rollno" required/></td>
</tr>
<tr>
<td>Password :</td><td> <input type="password" name="password" required/></td>
</tr>
<tr>
<td colspan="2">
<input type="submit" name="login" value="login"/>
</td>
</tr>
</table>
</form>
<?php
if(isset($_POST["login"]))
{
	 $rollno=$_POST["rollno"];
	 $password=$_POST["password"];
	$con=mysql_connect("localhost","root","");
	mysql_select_db("four_batch",$con);
$qry="select * from student where rollno='$rollno' and password='$password'";
	 
	 $result=mysql_query($qry);
	 $row=mysql_fetch_array($result);
	 if(!$row)
	 {echo "invalid login details";}
	 else
	 {
		 session_start();
		 $_SESSION["user"]=$rollno;
		 header("location:profile.php");
	 }
}
?>
</body>
</html>
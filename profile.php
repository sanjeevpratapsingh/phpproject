<?php
session_start();
if(!isset($_SESSION["user"]))
{ header("location:login.php");}
$rollno=$_SESSION["user"];
?>
<html>
<head>
<title>myprofie</title>
</head>
<body>
<?php
echo "welcome ".$rollno." || ";
echo "<a href='logout.php'>Logout</a><hr/>";
$con=mysql_connect("localhost","root","");
	mysql_select_db("four_batch",$con);
$qry="select * from student where rollno='$rollno'";
	 
	 $result=mysql_query($qry);
	 $row=mysql_fetch_array($result);
	 $name=$row["name"];
	 $mobile=$row["mobile"];
	 $address=$row["address"];
	 $dob=$row["dob"];
	$image=$row["image"];
	
	
mysql_close($con);
?>
<table width="500" border="1" cellspacing="1" cellpadding="5" bgcolor="#FFCCFF">
  <tr>
    <td>NAME</td>
    <td><?php echo $name; ?></td>
  </tr>
  <tr>
    <td>MOBILE</td>
    <td><?php echo $mobile; ?></td>
  </tr>
  <tr>
    <td>DOB</td>
    <td><?php echo $dob; ?></td>
  </tr>
  <tr>
    <td>ADDRESS</td>
    <td><?php echo $address; ?></td>
  </tr>
  <tr>
    <td>IMAGE</td>
    <td><img src="up/<?php echo $image; ?>" width="139" height="159"/></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
</table>




</body>
</html>
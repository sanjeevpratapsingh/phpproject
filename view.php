<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>

<?php

	$con=mysql_connect("localhost","root","rootwdp");
	mysql_select_db("four_batch",$con);
	$qry="select * from student";
	
	$result=mysql_query($qry);
	while($row=mysql_fetch_array($result))
	{
		echo $row["name"];
		echo "<br/>";
		echo $row["rollno"];
		echo "<br/>";
		echo $row["mobile"];
		echo "<br/>";
		echo $row["password"];
		echo "<br/>";
		echo $row["dob"];
		echo "<br/>";
		echo $row["address"];
		echo "<hr/>";
	}



?>

</body>
</html>
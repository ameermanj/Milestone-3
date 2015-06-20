<html>
<head>
<link href="login-box.css" rel="stylesheet" type="text/css" />
</head>

<body>
<form action = "logged.php" method = "post">
<input type="submit" id="logout" name='logout'value="Logout"/>

</form>
</body>
</html>

<?php

include 'db_connect.php';
session_start();
$id=$_SESSION['current_user'];
$query="select * from userprofile where uid=$id";
$result = mysql_query($query,$con);
$row = mysql_fetch_row($result);
$i=2;

echo"<table border=1>
<tr>
<th>First name</th>
<th>$row[2]</th>
</tr>
<tr>
<th>Last name</th>
<th>$row[3]</th>
</tr>

<tr>
<th>Birth Day</th>
<th>$row[4]</th>
</tr>

<tr>
<th>Gender</th>
<th>$row[5]</th>
</tr>

<tr>
<th>School name</th>
<th>$row[6]</th>
</tr>

<tr>
<th>College Name</th>
<th>$row[7]</th>
</tr>

<tr>
<th>College Degree</th>
<th>$row[8]</th>
</tr>

<tr>
<th>College Marks</th>
<th>$row[9]</th>
</tr>

<tr>
<th>University Name</th>
<th>$row[10]</th>
</tr>

<tr>
<th>University Degree</th>
<th>$row[11]</th>
</tr>

<tr>
<th>CGPA</th>
<th>$row[12]</th>
</tr>

<tr>
<th>Hobby</th>
<th>$row[13]</th>
</tr>

<tr>
<th>Experties</th>
<th>$row[14]</th>
</tr>

<tr>
<th>About Me</th>
<th>$row[15]</th>
</tr>";

//echo "<head>";
//echo "<link href='login-box.css' rel='stylesheet' type='text/css' />";
//echo "</head>";
//while ($i<count($row))
//{
//	echo "<div id ='show'> First Name";
//	echo "$row[$i] </div>";
	//echo "</br>";
//	$i++;
//}

?>


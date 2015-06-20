<?php
include 'db_connect.php';
session_start();
$id=$_SESSION['current_user'];
$query="select * from userprofile where uid=$id";
$result = mysql_query($query,$con);
$row = mysql_fetch_row($result);
if($row>0)
	header("Location:show_profile.php");
if(isset($_POST['logout']))
{
	unset($_SESSION['current_user']);
	setcookie('login','true', time()-100);
}

if(!isset($_SESSION['current_user']))
{
	header("Location:index.php");
}

?>
<html>
<head>
<link href="login-box.css" rel="stylesheet" type="text/css" />
</head>

<body>
<form action = "logged.php" method = "post">
<input type="submit" id="logout" name='logout'value="Logout"/>
</form>
<p>Successfully Login </br> Please complete your profile</p>

<div id="profile">
<H2>Basic</H2>
<form action = "profile.php" method = "post">
<div id="login-box-name">
First Name:</div><div id="login-box-field" ><input type='text' input name='fname' class="form-login" title="Username" size="30" maxlength="30" /></div>
<div id="login-box-name">
Last Name:</div><div id="login-box-field" ><input type='text' input name='lname' class="form-login" title="Username" size="30" maxlength="30" /></div>
<div id="login-box-name">
Date of Birth:</div><div id="login-box-field" ><input type='date' input name='bday' class="form-login" title="Username" size="30" maxlength="30" /></div>
<div id="login-box-name">
Gender:</div>
<div id="gender" ><input type="radio" name="gender" value="Male">Male</br>
<input type="radio" name="gender" value="Female">Female</div>
</div>
<div id="profile">
<H2>School / College</H2>
<div id="login-box-name">
School Name:</div><div id="login-box-field" ><input type='text' input name='sname' class="form-login" title="Username" size="30" maxlength="40" /></div>
<div id="login-box-name">
College Name:</div><div id="login-box-field" ><input type='text' input name='cname' class="form-login" title="Username" size="30" maxlength="40" /></div>
<div id="login-box-name">
College Degree:</div><div id="login-box-field" ><input type='text' input name='cdegree' class="form-login" title="Username" size="30" maxlength="30" /></div>
<div id="login-box-name">
College Marks:</div><div id="login-box-field" ><input type='text' input name='cmarks' class="form-login" title="Username" size="30" maxlength="30" /></div>
</div>
<div id="profile">
<H2>University</H2>
<div id="login-box-name">
University Name:</div><div id="login-box-field" ><input type='text' input name='uname' class="form-login" title="Username" size="40" maxlength="30" /></div>
<div id="login-box-name">
University Degree:</div><div id="login-box-field" ><input type='text' input name='udegree' class="form-login" title="Username" size="20" maxlength="30" /></div>
<div id="login-box-name">
CGPA:</div><div id="login-box-field" ><input type='text' input name='cgpa' class="form-login" title="Username" size="30" maxlength="30" /></div>
</div>
<div id="profile">
<H2>Personal</H2>
<div id="login-box-name">
Hobbies:</div><div id="login-box-field" ><input type='text' input name='hobby' class="form-login" title="Username" size="100" maxlength="30" /></div>
<div id="login-box-name">
Expertise:</div><div id="login-box-field" ><input type='text' input name='expert' class="form-login" title="Username" size="100" maxlength="30" /></div>
<div id="login-box-name">
About me:</div><div id="login-box-field" ><textarea rows="4" cols="50" class ="form-login" name='about'></textarea></div>

<input type='image' id="submit" src="http://www.clker.com/cliparts/s/k/f/S/M/A/submit-button-png-hi.png" width="103" height="42"name='submit'  />
</form>
</div>
</body>

</html>

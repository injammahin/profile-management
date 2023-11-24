<!DOCTYPE html>
<html>
<head>
	
	<title>Sign Up</title>
	<link rel="stylesheet" href="../view/css/style.css">
	<link rel="stylesheet" href="./templete/header1.css">
    <link rel="stylesheet" href="./templete/form.css">
    <link rel="stylesheet" href="./templete/footer.css">
    <link rel="stylesheet" href="/css/log.css">
   
</head>
<body style="background-color:aysh">
<?php include('templete/header.php')  ?> 
<?php



?>
<html>
<head>
    <title>CITIZEN LOGIN FORM</title>

<body>

<h1>CITIZEN LOGIN</h1>

<form action="../control/logincontrol.php" method="post" onsubmit="return  validlogin()"  >

<div style="padding-left: 30rem;" >


<table>

     
<tr>
<td><lable for="uname">USERNAME : -</lable></td>   
<td><input type="text" name="username" placeholder="enter username" . id="adminidlog" onkeyup="checkadminidlog()"></td>
<td> <p  id="erroradminidlog"></p></td>
</tr>

<tr>
<td><lable for="pass">PASSWORD :-</lable></td>   
<td><input type="text" name="password" placeholder="enter password" id="passwordlog" onkeyup="checkpasswordlog()"></td>
<td> <p  id="errorpasswordlog"></p></td>
</tr>






<tr>
<td><td><input type="submit" name="submit"></td></td>
</tr>

</body>

</table>
</div>
</form>
<a href="registration.php"> Go to Registration Page </a>
<?php include("../view/templete/footer.php") ?>



</html>

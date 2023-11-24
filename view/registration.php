



<?php
include("../control/control.php");

?>
<!DOCTYPE html>
<html>
<head>
<script src ="../js/myscript.js"></script>
	<title>Sign Up</title>
	<link rel="stylesheet" href="../view/css/style.css">
	
  
</head>
<body style="background-color:beige">
<?php include('templete/header.php')  ?> 
<html>
<head>
    <title>Form registration</title>
</head>
<body>

<h2>Registration form</h2>

<div style="padding-left:30%; padding-right:30%;">
      <fieldset>
<form action="../control/control.php" method="post" onsubmit="return valid()">
<table>


<tr>
<td><lable for="name">NAME:- </lable></td> 
<td><input type="text" name="name" id="name" placeholder="enter name" ></td> 
<td><p id="errorn"></p><?php echo $nameError; ?></td>
</tr>

<tr>
<td><lable for="fathername">FATHER NAME:- </lable></td>   
<td><input type="text" name="fathername"  id="fathername" placeholder="enter name"></td>
<td><p id="errorf"></p><?php echo $fathernameError; ?></td>
</tr>

<tr>
<td><lable for="mothername">MOTHER NAME:- </lable></td>   
<td><input type="text" name="mothername" id="mothername"placeholder="enter name"></td>
<td><p id="errorm"></p><?php echo $mothernameError; ?></td>
</tr>

<tr>
<td><lable for="dob">DOB:- </lable></td>   
<td><input type="date" name="dob" id="dob"  ></td>
<td><p id="errord"></p><?php echo $DOBError; ?></td>

</tr>

<tr>
<td><lable for="gender">GENDER:- </lable></td>   
<td><input type="radio" name="gender" value="male" id="male">MALE
<input type="radio" name="gender" value="female" id= "female">FEMALE</td>
<td><p id="errorg"></p><?php echo $genderError; ?></td>
</tr>


<tr>
<td><lable for="education">EDUCATION:- </lable></td>   
<td><input type="checkbox" name="ssc" id="ssc" >SSC
<input type="checkbox" name="hsc" id="hsc">HSC
<input type="checkbox" name="bsc" id="bsc">BSC
<input type="checkbox" name="msc"id="msc" >MSC</td>
<td><?php echo $educationError; ?></td>
</tr>



<tr>
<td><lable for="email">EMAIL:- </lable></td>   
<td><input type="text" name="email"  id="email" placeholder="enter email"></td>
<td><p id="erroremail"></p><?php echo $emailError; ?></td>

</tr>


<tr>
<td><lable for="mobile">MOBILE NUMBER:- </lable></td>   
<td><input type="text" name="mobile" id="mobile"  placeholder="enter number"></td>
<td><p id="errorl"></p><?php echo $mobileError; ?></td>
</tr>

<tr>
<td><lable for="address">ADDRESS:- </lable></td>   
<td><input type="text" name="address" rows="5" cols="30"  id="address"  placeholder="enter your address"></td>
<td><p id="errora"></p><?php echo $addressError; ?></td>

</tr> 
<tr>
<td><lable for="nid">NID:- </lable></td>   
<td><input type="text" name="nid"  id="nid" placeholder="enter number"></td>
<td><p id="errornid"></p><?php echo $nidError; ?></td>

</tr>

<td><label for="uname">USERNAME : -</label></td>
<td><input type="text" name="username" id="username" placeholder="enter username"></td>
<td><p id="erroruser"></p><?php echo $usernameError; ?></td>

</tr>
<tr>
<br><br>
<td><label for="pass">PASSWORD :-</label></td>
<td><input type="Password"  name="password" id="password" placeholder="enter password" ></td>
<p id="errorp"></p><?php echo $passError; ?></td>
</tr>


<tr>
<td><td><input type="submit" name="submit" value="SUBMIT" ></td></td>
</tr>


</fieldset>
</div>
</table>
</form>


<label id="ok"></label>


<a >already have an account? </a><a href="../view/login.php"><input type="button" name="Login" value="log in"></a>

</body>
</html>
</body>
<?php include("../view/templete/footer.php") ?>
</html>
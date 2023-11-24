
<?php

session_start();

$username = $_SESSION['username'];

    if (!isset($_SESSION['username'])) {

        header("Location:../view/login.php");

      }

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Sign up</title>
	<link rel="stylesheet" href="./templete/header1.css">
    <link rel="stylesheet" href="./templete/form.css">
    <link rel="stylesheet" href="./templete/footer.css">
    <?php include("./templete/header1.php") ?>
	<script src="js/changepass.js"></script>


    <?php
    echo "<h1>welcome as a citizen</h1>";
    ?>

<div style="padding-left:30%; padding-right:30%;">
      <fieldset>
<br>

<!-- <a style="padding-left:40%;" href="ChangePassword.php">Change Password</a> -->
<!-- <a href="../view/home.php"><input type="button" name="" value="Change Password "></a> -->
<a href="ChangePassword.php"><input type="button" name="Change Password" value="Update Password"></a>


<br>
<a   href="../view/editprofile.php"> <input type="button" name="Edit Profile" value="Edit  Profile"></a>

<a   href="../control/profile.php"> <input type="button" name="Profile" value=" View profile"></a>
<br>
<br>
		

<a href="../control/logout.php"><input type="button" name="logout" value="Logout"></a>

    </fieldset>
    </div>


<!-- <a style="padding-left:40%;" href="ChangePassword.php">Change Password</a>

<br>
<a  style="padding-left:45%;" href="../control/profile.php">  profile</a>
<br>
<br> -->
		

</body>
<?php include("../view/templete/footer.php") ?>
</html>
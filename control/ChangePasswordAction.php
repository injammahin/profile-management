<?php 

	session_start();
	if (!isset($_SESSION['username'])) {
		header("Location:../view/login.php");
	  }
	require("../Data/view.php");
	//file_put_contents("../Data/data.json", $myjsondata);
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Change Password</title>
	<link rel="stylesheet" href="../view/templete/style.css">
</head>
<body>
	<h1 >Change Password </h1>	
	
	<?php

		function test($user)	
		{
			$user = trim($user);
			$user = stripslashes($user);
			$user = htmlspecialchars($user);
			return $user;
		}		
	?>		
	<?php 
		if ($_SERVER['REQUEST_METHOD'] === "POST")
		{	
			$username = $_SESSION['username'];
			$password = test($_POST['password']);
			if (empty($password))
			{
				echo "Fill up the password properly";			
							
			}
			elseif(!empty($password)|| $password != NULL)
			{
				$sql="UPDATE `User` SET `password`='$password' WHERE `username`='$username'";
				view($sql);
				
				header("Location:../view/adminprofile.php");
				
			}
			}
							
		
		else
		{
			echo "Can not process GET REQUEST METHOD";
		}	        
	?>
	<br><br>
	<a href="../view/ChangePassword.php">Go Back
	<?php include("../view/templete/footer.php") ?>
</body>
</html>


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
	<title>update profile</title>
	<link rel="stylesheet" href="../view/templete/style.css">
</head>
<body>
	<h1 >update profile </h1>	
	
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
			$mobile = test($_POST['mobile']);
			if (empty($mobile))
			{
				echo "Fill up the number properly";			
							
			}
			elseif(!empty($mobile)|| $mobile != NULL)
			{
				$sql="UPDATE `User` SET `mobile`='$mobile' WHERE `username`='$username'";
				view($sql);
				
				header("Location:../view/adminprofile.php");
				
			}
			}
							
		
		else
		{
			echo "Can not process GET REQUEST METHOD";
		}	        
	?>
<?php 
		if ($_SERVER['REQUEST_METHOD'] === "POST")
		{	
			$username = $_SESSION['username'];
			$name = test($_POST['name']);
			if (empty($name))
			{
				echo "Fill up the number properly";			
							
			}
			elseif(!empty($name)|| $name != NULL)
			{
				$sql="UPDATE `User` SET `name`='$name' WHERE `username`='$username'";
				view($sql);
				
				header("Location:../view/adminprofile.php");
				
			}
			}
							
		
		else
		{
			echo "Can not process GET REQUEST METHOD";
		}	        
	?>
<?php 
		if ($_SERVER['REQUEST_METHOD'] === "POST")
		{	
			$username = $_SESSION['username'];
			$fathername = test($_POST['fathername']);
			if (empty($fathername))
			{
				echo "Fill up the number properly";			
							
			}
			elseif(!empty($fathername)|| $fathername != NULL)
			{
				$sql="UPDATE `User` SET `fathername`='$fathername' WHERE `username`='$username'";
				view($sql);
				
				header("Location:../view/adminprofile.php");
				
			}
			}
							
		
		else
		{
			echo "Can not process GET REQUEST METHOD";
		}	        
	?>

<?php 
		if ($_SERVER['REQUEST_METHOD'] === "POST")
		{	
			$username = $_SESSION['username'];
			$mothername = test($_POST['mothername']);
			if (empty($mothername))
			{
				echo "Fill up the number properly";			
							
			}
			elseif(!empty($mothername)|| $mothername != NULL)
			{
				$sql="UPDATE `User` SET `mothername`='$mothername' WHERE `username`='$username'";
				view($sql);
				
				header("Location:../view/adminprofile.php");
				
			}
			}
							
		
		else
		{
			echo "Can not process GET REQUEST METHOD";
		}	        
	?>

<?php 
		if ($_SERVER['REQUEST_METHOD'] === "POST")
		{	
			$username = $_SESSION['username'];
			$email = test($_POST['email']);
			if (empty($email))
			{
				echo "Fill up the number properly";			
							
			}
			elseif(!empty($email)|| $email != NULL)
			{
				$sql="UPDATE `User` SET `email`='$email' WHERE `username`='$username'";
				view($sql);
				
				header("Location:../view/adminprofile.php");
				
			}
			}
							
		
		else
		{
			echo "Can not process GET REQUEST METHOD";
		}	        
	?>




<?php 
		if ($_SERVER['REQUEST_METHOD'] === "POST")
		{	
			$username = $_SESSION['username'];
			$address = test($_POST['address']);
			if (empty($address))
			{
				echo "Fill up the number properly";			
							
			}
			elseif(!empty($address)|| $address != NULL)
			{
				$sql="UPDATE `User` SET `address`='$address' WHERE `username`='$username'";
				view($sql);
				
				header("Location:../view/adminprofile.php");
				
			}
			}
							
		
		else
		{
			echo "Can not process GET REQUEST METHOD";
		}	        
	?>

<?php 
		if ($_SERVER['REQUEST_METHOD'] === "POST")
		{	
			$username = $_SESSION['username'];
			$nid = test($_POST['nid']);
			if (empty($nid))
			{
				echo "Fill up the number properly";			
							
			}
			elseif(!empty($nid)|| $nid != NULL)
			{
				$sql="UPDATE `User` SET `nid`='$nid' WHERE `username`='$username'";
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


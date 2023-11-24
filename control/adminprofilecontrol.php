
<?php 
session_start();
$Username = $_SESSION['username'];
if (!isset($_SESSION['username'])) {
	header("Location: ../view/Login.php");
}
require("../Data/view.php")?>
	

<!DOCTYPE html>
<html>
	<body>
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Profile</title>
	<link rel="stylesheet" href="../templete/header1.css">
    <link rel="stylesheet" href="../templete/form.css">
    <link rel="stylesheet" href="../templete/footer.css">
    <?php include("../view/templete/header.php") ?>
</head>

	<?php
	$Name=$Fathername=$Mothername=$Email=$username='';
?>
<div  style="padding-left:40%; padding-right:0%;">
	<b>Profile Information</b>	
		
	

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

	// $sql="SELECT  `Name`, `Fathername`, `Mothername`, `Email` FROM `User` WHERE `username`='$username'";
	// $result=view($sql);
	
	
	
	// if (mysqli_num_rows($result))
	// {
    // while($row = mysqli_fetch_assoc($result))
	// 	{
	// 	echo "<br><br>";
	// 	echo "UserName: " . $username;
	// 	echo "<br><br>";
	// 	echo "First Name: " . $row["Name"];
	// 	echo "<br><br>";
    //     echo "Last Name: " . $row["Fathername"];		
	// 	echo "<br><br>";				 				
	// 	echo "Phone: " . $row["Mothername"];
	// 	echo "<br><br>";
    //     echo "Email: " . $row["Email"];
	// 	echo "<br><br>";
	// 	}
	// }
	// else{
	// 	echo "Not found";
	// }
	// ?>

	// </div>
	// <?php include("../view/templete/footer.php") ?> 
</body>
	
</html>

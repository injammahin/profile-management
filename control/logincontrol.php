<?php 
session_start();
// $Username = $_SESSION['username'];
// if (!isset($_SESSION['username'])) {
// 	header("Location: Login.php");
// }
require("../Data/view.php");
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Login</title>
</head>
<body>

	<?php

		function test($data)	
		{ 
			$data = trim($data);
			$data = stripslashes($data);
			$data = htmlspecialchars($data);
			return $data;
		}		
	 
		if ($_SERVER['REQUEST_METHOD'] === "POST")
		{

			$username = test($_POST['username']);
			$password = test($_POST['password']);
            $_SESSION['msg'] = "";
			//$_SESSION['username']=$_POST['username'];
			if (empty($username) || empty($password)) 
			{
					// echo "Fill up the form properly";
					 echo "<br>";
					// echo "Go back to Login Page and Try again with valid username or password";
				$_SESSION['msg'] = "Please fill up the form properly";
				    header("Location: ../view/Login.php");					
			}

			elseif (!empty($username) && !empty($password)) 
			{
				 
				$sql="SELECT `Id` FROM `User` WHERE `username`='$username' AND `Password`='$password'";
				$result=view($sql);
				if (mysqli_num_rows($result)==1)
				{
					while($row = mysqli_fetch_assoc($result))
					{
						$_SESSION['username']=$_POST['username'];
						header("Location:../view/adminprofile.php");
						break;
					}
					
				}
						
			}
		}
	
		else
		{
			$_SESSION['msg'] = "Login Failed...!";
				header("Location: ../view/Login.php");
		}
	?>
	<br><br>
    
	<a href="../view/Login.php">Go Back</a>
</body>
</html>
<?php
use function CommonMark\Render\HTML;

session_start();

$username = $_SESSION['username'];

    if (!isset($_SESSION['username'])) {

        header("Location:login.php");

      }

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Sign up</title>
	<link rel="stylesheet" href="../view/templete/header1.css">
    <!-- <link rel="stylesheet" href="../view/templete/form.css"> -->
    <link rel="stylesheet" href="../view/templete/footer.css">
	
    <?php include("../view/templete/header1.php") ?>
	<title>Document</title>
	<?php include('../Data/pro.php')  ?> 

	</head>
  
    

<body>


<?php

$username = $_SESSION['username'];

	$result = get($username);


if ($result->num_rows > 0) {
	// echo "<table border='1' align='center'>";
	// echo "<tr>";
	// echo "<th>Name</th>";
	// echo "<th>Name</th>";
	// // echo "<th>Gender</th>";
	// // echo "<th>Date of Birth</th>";
	// // echo "<th>Email</th>";
	// // echo "<th>Contact No</th>";
	// // echo "<th>Username</th>";
	// // echo "<th>Action</th>";
	while ($data = $result->fetch_assoc()) {
		// echo "</tr>";
		// echo "<tr>";
		// echo "<td>101-" . $data['Name'] . "</td>";
		// echo "<td>" . $data['Fathername'] . "</td>";
		// // echo "<td>" . $data['Gender'] . "</td>";
		// // echo "<td>" . $data['DateOfBirth'] . "</td>";
		// // echo "<td>" . $data['Email'] . "</td>";
		// // echo "<td>" . $data['Contact'] . "</td>";
		// // echo "<td>" . $data['Username'] . "</td>";
		// // echo "<td><a href='/ProjectDH/View/EditCustomer.php?id=" . $data['ID'] ."'>Edit</a></td>"; 
		// // echo "<td><a href='/ProjectDH/Controller/DeleteActionCustomer.php?id=" . $data['ID'] ."'>Delete</a></td>";
		// echo "</tr>";

		echo "<h3>NAME IS------------------ : " . $data['Name']."</h3>";
		echo "<h3>FATHERNAME is------       : " . $data['Fathername']."</h3>";
		echo "<h3>MOTHERNAME IS ---    : " . $data['Mothername']."</h3>";
		echo "<h3>DOB IS --------------------: " . $data['dob']."</h3>";
		echo "<h3>EMAIL IS ----------------       : " . $data['Email']."</h3>";
		echo "<h3>MOBILE NO  ------------      : " . $data['mobile']."</h3>";
		echo "<h3>ADDRESS IS  ------------      : " . $data['Address']."</h3>";
		echo "<h3>NID NO IS  ---------------  : " . $data['Nid']."</h3>";
		echo "<h3>USERNAME    ------------    : " . $data['username']."</h3>";



	}
	echo "</table>";
}
else {
	echo "No record(s) found";
}



?>
</body>
</html>
<a href="../view/adminprofile.php"><input type="button" name="Login" value="Go Back"></a>

<?php include("../view/templete/footer.php") ?>
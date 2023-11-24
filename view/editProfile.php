
<?php 
session_start();
$Username = $_SESSION['username'];
if (!isset($_SESSION['username'])) {
	header("Location:Login.php");
}?>
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

    $username = "";
    $mobile = "";

    
    ?>

    <h1 >Edit profile</h1>

    <form action="../control/editProfileAction.php" method="POST" novalidate onsubmit="return validate_pass(this);">
    
    <div style="padding-left:30%; padding-right:30%;">
      <fieldset>
        <label for="username">Username</label>
        <input type="text" name="username" id="username" value="<?php echo $_SESSION['username'] ?>" size="25" maxlength="5" disabled >            
        <br><br>
        <label for="name"> New name</label>
        <input type="text" name="name" id="name" >
        <span Id="nameErrMsg"></span>
        <br><br> 
        <label for="fathername"> New fathername</label>
        <input type="text" name="fathername" id="fathername" >
        <span Id="fathernameErrMsg"></span>
        <br><br> 
        <label for="mothername"> New mothername</label>
        <input type="text" name="mothername" id="mothername" >
        <span Id="mothernameErrMsg"></span>
        <br><br>
        <label for="email"> New email</label>
        <input type="text" name="email" id="email" >
        <span Id="emailErrMsg"></span>
        <br><br> 
        <label for="mobile"> New number</label>
        <input type="text" name="mobile" id="mobile" >
        <span Id="mobileErrMsg"></span>
        <br><br> 
        <label for="address"> New address</label>
        <input type="text" name="address" id="address" >
        <span Id="addressErrMsg"></span>
        <br><br> 
		
        
        <label for="nid"> New nid number</label>
        <input type="text" name="nid" id="nid" >
        <span Id="nidErrMsg"></span>
        <br><br> 
		
        <br><br>         
        <input type="submit" name="Update" value="Update">

        <br><br>
        <a href="../view/adminprofile.php"><input type="button" name="Login" value="Go Back"></a>

        </fieldset>
         </div>
         
    </form>
    
    <?php include("./templete/footer.php") ?>
</html>
















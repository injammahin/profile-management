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
    $password = "";

    
    ?>

    <h1 >Update Password</h1>

    <form action="../control/ChangePasswordAction.php" method="POST" novalidate onsubmit="return validate_pass(this);">
    
    <div style="padding-left:30%; padding-right:30%;">
      <fieldset>
        <label for="username">Username</label>
        <input type="text" name="username" id="username" value="<?php echo $_SESSION['username'] ?>" size="25" maxlength="5" disabled >            
        <br><br>
        <label for="password"> New Password</label>
        <input type="password" name="password" id="password" >
        <span Id="passwordErrMsg"></span>
        <br><br>        
        <input type="submit" name="Update" value="Update">

        <br><br>
        <a href="../view/home.php"><input type="button" name="Login" value="Go Back"></a>

        </fieldset>
         </div>
         
    </form>
    
    <?php include("./templete/footer.php") ?>
</html>

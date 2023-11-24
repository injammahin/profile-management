
<?php



$nameError="";
$passError="";
$genderError="";
$educationError="";
$fathernameError ="";
$mothernameError="";
$DOBError = "";
$mobileError="";
$emailError ="";
$usernameError="";
$myjsondata="";
$hasError=false;
$addressError="";
$nidError="";
$passwordError="";
$nidError="";
$addressError="";
$flag=0;

function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
  }

  require("../Data/User.php");
if(isset($_REQUEST["submit"]))
{

    $name = test_input($_REQUEST["name"]);
    $fathername = test_input($_REQUEST["fathername"]);
    $mothername = test_input($_REQUEST["mothername"]);
    $gender= isset($_REQUEST["gender"]);
    $dob = test_input($_REQUEST["dob"]);
    $mobile = test_input($_REQUEST["mobile"]);
    $username = test_input($_REQUEST["username"]);
    $email = test_input($_REQUEST["email"]);
    $nid = test_input($_REQUEST["nid"]);
    $address = test_input($_REQUEST["address"]);
    $password = test_input($_REQUEST["password"]);
    if(empty($_REQUEST["name"]))
    {
        $nameError= "Name is Required";
        $hasError=true;
    }

    else 
    {
        $nameError= "Your Name is: ".$_REQUEST["name"];
    

        
        
        if (!preg_match("/^[a-zA-Z-' ]*$/",$name)) {
          $nameError = "Only letters and white space allowed";
        }
    }

    if(empty($_REQUEST["fathername"]))
    {
        $fathernameError= " father Name is Required";
        $hasError=true;

    }

    else 
    {
        $fathernameError= "father Name is: ".$_REQUEST["fathername"];
    }
    
    if(empty($_REQUEST["mothername"]))
    {
        $mothernameError= " mother Name is Required";
        $hasError=true;

    }

    else 
    {
        $mothernameError= "mother name is: ".$_REQUEST["mothername"];
    }


  






    if(isset($_REQUEST["gender"]))
    {
        $genderError= "Your  are: ".$_REQUEST["gender"];
       
    }

    else 
    {
        $genderError= "gender is Required";
        $hasError=true;

    }
    

    if(empty($_REQUEST["dob"]))
    {
        $DOBError= " DOB is Required";
        

    }

    else 
    {
        $DOBError= "Your dob is: ".$_REQUEST["dob"];
    }





$mobile= $_REQUEST ["mobile"];  


if(empty($mobile)){
    $mobileError="mobile number is required";
}
if(!empty($mobile)){
    
    if(!preg_match ("/^[0-9]*$/", $mobile) ){  
        $mobileError = "Only numeric value is allowed.";     
    }
    
    else{
        
         $mobileError= "mobile no is: ".$_REQUEST["mobile"];
}
}

    
    if(empty($_REQUEST["username"]))
    {
        $usernameError= " Username is Required";
        $hasError=true;

    }

    else 
    {
        $usernameError= "your User name is: ".$_REQUEST["username"];
    }
    
  
    if (empty($_POST["email"])) {
        $emailError = "Email is required";
      } else {
       $email = test_input($_REQUEST["email"]);
        
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
          $emailError = "Invalid email format";
        }
        else

        {
            $emailError= "Your email address is: ".$_REQUEST["email"];
        }
      }

  





      if(empty($_REQUEST["nid"]) || ! preg_match(("/[0-9\s]/i"), $_REQUEST["nid"])||(strlen($_REQUEST["nid"])>10))  

     
      {
          $nidError=" Allow only 10 digits";
      }
      else{
          
          $nidError="nid number is:".$_REQUEST["nid"];
      }


      if(empty($_REQUEST["address"]) || ! preg_match(("/[a-z\s]/i"),$_REQUEST["address"]))  
      {
          $addressError=" start with capital or small letter";
      }
      else{
          
          $addressError="ADDRESS IS:".$_REQUEST["address"];
      }
  
  













    if(strlen($_REQUEST["password"])<8)
    {
        $passwordError= "Password must have 8 char";
        $hasError=true;

    }
    else
    {
        $passwordError= "your password is taken";



    }
    if ($hasError == false) {

        // $existingdata = file_get_contents("../Data/data.json");
        // $existingdatainphp = json_decode($existingdata);

        // $myarray = array(
        //     "Name" => $_REQUEST["name"],
        //     "Fathername" => $_REQUEST["fathername"],
        //     "Mothername" => $_REQUEST["mothername"],
        //     "dob" => $_REQUEST["dob"],
        //     "Gender" => $_REQUEST["gender"],
        //     "Email" => $_REQUEST["email"],
        //     "mobile" => $_REQUEST["mobile"],
        //     "Address" => $_REQUEST["address"],
        //     "Nid " => $_REQUEST["nid"],
        //     "username" => $_REQUEST["username"],
        //     "Password" => $_REQUEST["password"],




        // );

        // if ($flag === 1) {
        //     echo "Registration Failed";
        // }

        // if ($flag === 0) {
        //     //echo "Registration Successful";
        //     echo "<br>";

        //     $arr = array('Name' => $Name, 'Fathername' => $FatherName, 'Mothername' => $MotherName, 'Gender' => $Gender, 'Email' => $Email, 'mobile' => $MobileNumber, 'username' => $Username, 'password' => $Password);
        //     echo $arr;
        //     User($arr);

        //     header("Location: ../view/registration.php");

        // }



        // $existingdatainphp[]=$myarray;
        // $myjsondata = json_encode( $existingdatainphp, JSON_PRETTY_PRINT);

        //  if(empty($name) || (empty($fathername)) || (empty($mothername))|| (!isset($gender)) || (empty($dob)) || (empty($mobile)) || (empty($username)) || (empty($password)) || (empty($email)) || (empty($nid)) || (empty($address)))
        // // if(false)
        // {
        //     echo "Please Enter Everything Correctly";
        // }
        // else{
        //     file_put_contents("../Data/data.json", $myjsondata);

        //     echo "Data successfully saved <br>";


        // }

        if ($hasError == 0) {

            $connection = new database();
            $conobj = $connection->openCon();
            $result = $connection->insertUser($conobj, "User", $name,$fathername,$mothername,$dob,$gender,$email,$mobile,$address,$nid,$username,$password);
            if ($result == true) {
                echo "Data inserted";
            } else {

                echo "Error";
            }


        }
    }
}

?>



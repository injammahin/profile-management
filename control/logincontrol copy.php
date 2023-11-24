<?php
$loginerror=0;

session_start();


setcookie("user","visited",time()+3600*2);

if(isset($_COOKIE["user"]))
{
    echo "welcome back";
}
else
{
    echo "<h1> welcome to our website</h1>";
}






if(isset($_REQUEST["submit"]))
{
    $adminid=$_REQUEST["username"];
    $password=$_REQUEST["password"];
    
   
    $myjsondata=file_get_contents("../Data/data.json");
    $myphpdata=json_decode($myjsondata);

    foreach($myphpdata as $myobject)
    {

        if($adminid== $myobject-> username && $password== $myobject->Password)

        {
            $_SESSION["username"]=$adminid;
            header("Location: ../view/adminprofile.php");
        }
        else
        {
            $loginerror=1;

        }
    }

    if($loginerror==1)
    {
       echo"       <h1>not a valid user </h1>  "; 
        
    }

}
?>
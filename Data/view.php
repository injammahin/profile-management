<?php

function view($sql)
{
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "city";
$conn = mysqli_connect($servername, $username, $password,$dbname);

  
$result=mysqli_query($conn, $sql);



  
  mysqli_close($conn); 
    return $result;


}

?> 
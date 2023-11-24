<?php




function get($username){
    $conn = new mysqli("localhost", "root", "","city");
    $sql="SELECT * FROM `User` where username='$username' ";
    return $conn->query($sql);
  }


?>
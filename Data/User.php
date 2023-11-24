<!-- <?php
class database{


function openCon(){
$conn = new mysqli("localhost", "root", "","city");

return $conn ;
}
function insertUser($conn,$tablename,$Name,$Fathername,$Mothername,$dob,$Gender,$Email,$mobile,$Address,$Nid,$username,$Password){
$sqlstr="INSERT INTO $tablename(Name,Fathername,Mothername,dob,Gender,Email,mobile,Address,Nid,username,Password) VALUES ('$Name','$Fathername','$Mothername','$dob','$Gender','$Email','$mobile','$Address','$Nid','$username','$Password')";
return $conn->query($sqlstr);
}

function checklogin($conn,$tablename,$adminid,$password){
  $sql="SELECT * FROM $tablename WHERE adminid='$adminid' AND password='$password'";
  return $conn->query($sql);
}

function showUser($conn,$tablename,$adminid){
  $sql="SELECT * FROM $tablename WHERE adminid='$adminid'";
  return $conn->query($sql);
}

function showAll($conn,$tablename){
  $sql="SELECT * FROM $tablename";
  return $conn->query($sql);
}



function closeCon($conn)
{
    $conn->close;
}


}
?> -->
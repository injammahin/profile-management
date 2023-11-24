
function checkadminidlog(){
    var n=document.getElementById("adminidlog").value;
if(n.value=="" || n.value==null && n.length>8){
document.getElementById("erroradminidlog").innerHTML="PLEASE FILL UP THE ADMINID";
return false;
}
else{
    document.getElementById("erroradminidlog").innerHTML=n;
    return true;
}
}

function checkpasswordlog(){
    var n=document.getElementById("password").value;
if( isNaN(n) && n.length>6){
document.getElementById("errorpasswordlog").innerHTML="ALLOW 6 DIGIT PASSWORD";
return false;
}
else{
    document.getElementById("errorpasswordlog").innerHTML=n;
    return true;
}
}


function validlogin()
{
if(checkadminidlog()==true && checkpasswordlog()==true  ){

return true;
}

else{
    return false;


}
  
}
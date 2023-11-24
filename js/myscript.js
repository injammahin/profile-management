function checkname(){
    var n=document.getElementById("name").value;
if(n.value=="" || n.value==null && n.length<4){
document.getElementById("errorn").innerHTML="PLEASE FILL UP THE NAME BOX";
return false;
}
else{
    document.getElementById("errorn").innerHTML=n;
    return true;
}
}

function checkfathername(){
    var n=document.getElementById("fathername").value;
if(n.value=="" || n.value==null && n.length<4){
document.getElementById("errorf").innerHTML="PLEASE FILL UP THE NAME BOX";
return false;
}
else{
    document.getElementById("errorf").innerHTML=n;
    return true;
}
}


function checkmname(){
    var n=document.getElementById("mothername").value;
if(n.value=="" || n.value==null && n.length<4){
document.getElementById("errorm").innerHTML="PLEASE FILL UP THE NAME BOX";
return false;
}
else{
    document.getElementById("errorm").innerHTML=n;
    return true;
}
}


function checkaddress(){
    var n=document.getElementById("address").value;
if(n.value=="" ){
document.getElementById("errora").innerHTML="PLEASE FILL UP THE ADDRESS BOX";
return false;
}
else{
    document.getElementById("errora").innerHTML=n;
    return true;
}
}

function checknid(){
    var n=document.getElementById("nid").value;
if(n.length>10 && (isNaN(n))){
document.getElementById("errornid").innerHTML="ALLOW 10 DIGIT NID NUMBER";
return false;
}
else{
    document.getElementById("errornid").innerHTML=n;
    return true;
}
}






function checkmobile(){
    var n=document.getElementById("mobile").value;
if(n.length>11){
document.getElementById("errorl").innerHTML="ALLOW 11 DIGIT MOBILE NUMBER";
return false;
}
else{
    document.getElementById("errorl").innerHTML=n;
    return true;
}
}






function checkemail()
{
    var n=document.getElementById("email").value;
    var em = /^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/;
    var ev = em.test(n);
if(!ev){
document.getElementById("erroremail").innerHTML="PLEASE ENTER CORRECT EMAIL ADDRESS";
return false;
}
else{
    document.getElementById("erroremail").innerHTML=n;
    return true;
}
}










function checkusername(){
    var n=document.getElementById("username").value;
if(n.value=="" || n.value==null && n.length>8){
document.getElementById("erroruser").innerHTML="PLEASE FILL UP THE ADMINID";
return false;
}
else{
    document.getElementById("erroruser").innerHTML=n;
    return true;
}
}

function checkpasswordlog(){
    var n=document.getElementById("passwordlog").value;
if( isNaN(n) && n.length>6){
document.getElementById("errorpass").innerHTML="ALLOW 6 DIGIT PASSWORD";
return false;
}
else{
    document.getElementById("errorpass").innerHTML=n;
    return true;
}
}

function valid()
{
if(checkname()==true &&checkfathername()==true && checkmname()==true &&  checkaddress()==true && checknid()==true && checkmobile()==true &&  checkemail()==true  &&  checkusername()==true && checkpassword()==true  ){

return true;
}

else{
    return false;

}
  
}
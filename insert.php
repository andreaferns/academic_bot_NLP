<?php 
 include('connection.php'); 
 $uname = $_POST['uname']; 
 $email = $_POST['email']; 
 $password = $_POST['password'];

 $ID = $_POST['uname']; 
 $Password = $_POST['password']; 
 
 
$sql1 = "insert into register values ('$uname','$email','$password')";
$sql2 = "insert into login values ('$ID','$Password')";

if(mysqli_query($con, $sql1)){
  include('GetStarted.php');

} else{
  include('GetStarted.php');
}

if(mysqli_query($con, $sql2)){
  include('GetStarted.php');
} else{
  include('GetStarted.php');
}
?>

<?php 
 include('connection.php'); 
 $username = $_POST['loginuser']; 
 $password = $_POST['loginpass']; 
 
$sql = "select * from login where ID = '$username' and Password = '$password'"; 
$result = mysqli_query($con, $sql); 
$row = mysqli_fetch_array($result, MYSQLI_ASSOC); 
$count = mysqli_num_rows($result); 
 
if($count == 1){
    header("Location: "");
 } 
 else{
  include('GetStarted.php');
 }

?>


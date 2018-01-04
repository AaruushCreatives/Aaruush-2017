<?php
if(isset($_POST['email'])){
include_once("db.php");
$email= $_POST['email'];
$password= $_POST['password'];
$p = md5($password);
$query = "select * from amb_reg where email='$email' and password='$p'";
$result = mysqli_query($db, $query);
 $count = mysqli_num_rows($result);
if($count==1){
  echo "s";
}
else{
  echo "Incorrect Email Id or Password";
}
}
?>

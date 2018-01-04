<?php
if(isset($_POST['first_name'])){
  include_once("db.php");
$first_name = $_POST['first_name'];
$last_name = $_POST['last_name'];
$city_name = $_POST['city_name'];
$college_name = $_POST['college_name'];
$course_name = $_POST['course_name'];
$year =  $_POST['year'];
$phonenumber = $_POST['phonenumber'];
 $wphonenumber= $_POST['wphonenumber'];
 $fbblink = $_POST['fbblink'];
$email = $_POST['email'];
$password = $_POST['password'];
$p = md5($password);
$why_campus = $_POST['why_campus'];

 $q = "select * from amb_reg where email='$email'";
$re = mysqli_query($db, $q);
 $count = mysqli_num_rows($re);
if($count>=1){
  echo "Already Registered";
}
else{
 $query = "INSERT INTO `amb_reg`(`first_name`, `last_name`, `city_name`, `college_name`, `course_name`,`year`, `phone`, `wphone`,
   `fblink`, `email`, `password`, `why_campus`) VALUES
   ('$first_name','$last_name','$city_name','$college_name','$course_name','$year','$phonenumber','$wphonenumber','$fbblink',
   '$email','$p','$why_campus')";
   $result = mysqli_query($db,$query);
   if($result){
     echo "success";
   }
   else{
     echo "Incorrect Data Inputs";
   }
}
}
 ?>

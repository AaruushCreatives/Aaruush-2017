<?php
include_once('db.php');
if(isset($_POST['userid'])){
  $points = $_POST['point'];
  $userid =  $_POST['userid'];
  $query = "select points from leaderboard where userid='$userid'";
  $response = mysqli_query($db,$query);
  if($response){
  $point = mysqli_fetch_array($response);
  echo $point[0];
  
}
}

 ?>

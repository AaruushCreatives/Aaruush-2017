<?php
include_once('db.php');
if(isset($_POST['userid'])){
  $points = $_POST['point'];
  $userid =  $_POST['userid'];
 $query = "select points from leaderboard where userid='$userid'";
  $response = mysqli_query($db,$query);
  if($response){
  $point = mysqli_fetch_array($response);
 $newScore = $point[0]+10;
 $updateScore = "update leaderboard set points='$newScore' where userid='$userid'";
$res = mysqli_query($db,$updateScore);
if($res){
  echo "Score Updated";
}
else{
  echo "Please Try Again";
}
}
}

 ?>

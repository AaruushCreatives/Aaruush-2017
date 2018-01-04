
<?php
//Load the database configuration file
include 'db.php';

if(isset($_POST['userid'])){
  $id = $_POST['userid'];
  $name = $_POST['Fname']." ".$_POST['Lname'];
  $email = $_POST['email'];
$r = "select id from user_details where id='$id'";
$result = mysqli_query($db, $r);
$count = mysqli_num_rows($result);

if($count!=0){
  echo "User Already Registered!!";
  exit();
}

else {
 $in = "insert into user_details (`id`,`name`, `email`, `phone`, `college`, `address`) VALUES ('$id','$name', '$email','','','')";
$res = mysqli_query($db,$in);
echo $pointsTable = "insert into leaderboard (`userid`, `points`) values('$id', 0)";
$response = mysqli_query($db,$pointsTable);
if($response){
  ;
    exit();
}
else{
  echo "Try Again";
}
}
}
?>

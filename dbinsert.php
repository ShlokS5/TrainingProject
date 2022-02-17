<?php 

session_start();
header("location:Register.php");

$server="localhost";
$user = "shlok";
$Pass = "test456";
$db = "Project";


$conn = mysqli_connect($server, $user, $Pass, $db);

if($conn){
  echo "Connection Successful";
  header('location:Register.php');
}
else{
  echo "Not connected ";
}

mysqli_select_db($conn, $db);

$fname = $_POST['fname'];
$lname = $_POST['lname'];
$email = $_POST['email'];
$gender = $_POST['gender'];
$pass = $_POST['password'];

$q = " select * from users where Email = '$email' ";

$result = mysqli_query($conn, $q);

$num = mysqli_num_rows($result);

if($num == 1){
  echo "duplicate entry";
}
else{
  //$encpass = md5($pass);
  $qy = " insert into users(fname, lname, email, gender, password) values('$fname', '$lname', '$email', '$gender', '$pass')";
  mysqli_query($conn, $qy);
}

?>
<?php 

session_start();
//header("location:Register.php");

$server="localhost";
$user = "shlok";
$Pass = "test456";
$db = "project";


$conn = mysqli_connect($server, $user, $Pass, $db);

if($conn){
  echo "Connection Successful";
}
else{
  echo "Not connected";
}

mysqli_select_db($conn, $db);

$email = $_POST['Email'];
$pass = $_POST['Pass'];

$q = " select * from users where email = '$email' && password = '$pass' ";

$result = mysqli_query($conn, $q);

$num = mysqli_num_rows($result);

if($num == 1){

  $q2 = "INSERT INTO status (Fname, Lname, Email) SELECT (fname, lname, email FROM users WHERE users.email = '$email')";
  mysqli_query($conn, $q2);

  $_SESSION['username'] = $name;
  header('location:home.php');
}
else{
  header('location:Register.php');
}

?>
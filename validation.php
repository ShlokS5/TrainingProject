<?php 

session_start();

header("location:Register.php");

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

$_SESSION['email'] = $email;

$q = " select * from users where email = '$email' && password = '$pass' ";

$result = mysqli_query($conn, $q);

$num = mysqli_num_rows($result);

if($num == 1){

  $q2 = " update users set status = 'online' where email = '$email' ";
 
  mysqli_query($conn, $q2);

  header('location:home.php');
}
else{
  header('location:Register.php');
}

?>
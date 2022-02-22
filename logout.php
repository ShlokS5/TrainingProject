<?php 

session_start();

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

$Email = $_SESSION['email'];

$q3 = "UPDATE users SET status = 'offline' WHERE Email = '$Email'";

$res = mysqli_query($conn, $q3);
if ($res) {
 echo "updated succesfully";
}

session_unset();
session_destroy();

header('location:Register.php');

?>
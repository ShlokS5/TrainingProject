<?php
session_start();

$Email = $_SESSION['email'];
$pass = $_POST['pass'];
$pass2 = $_POST['pass2'];

$servername = "localhost";
$username = "shlok";
$password = "test456";
$dbname = "project";

$conn = mysqli_connect($servername, $username, $password, $dbname);
        
  if($pass != $pass2){
    echo "passwords do not match!";
  }else{  
    if ($conn) {
    mysqli_select_db($conn, $dbname);
    $sql = "UPDATE users SET password = '$pass' WHERE email = '$Email'";
    mysqli_query($conn, $sql);
    header('location:profile.php');
    }else{
      echo "not connected";
    }
  }

?>
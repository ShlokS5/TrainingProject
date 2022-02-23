<?php
session_start();

$Email = $_SESSION['email'];
$fname = $_POST['fname'];

$servername = "localhost";
$username = "shlok";
$password = "test456";
$dbname = "project";

$conn = mysqli_connect($servername, $username, $password, $dbname);
  
  if (!preg_match ("/^[a-zA-z]*$/", $fname) ) {    
    echo "Only alphabets and whitespace are allowed.";
  }else{     
    if ($conn) {
    mysqli_select_db($conn, $dbname);
    $sql = "UPDATE users SET fname = '$fname' WHERE email = '$Email'";
    mysqli_query($conn, $sql);
    header('location:profile.php');
    }else{
      echo "not connected";
    }
  }

?>
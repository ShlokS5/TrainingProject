<?php
session_start();

$Email = $_SESSION['email'];
$lname = $_POST['lname'];

$servername = "localhost";
$username = "shlok";
$password = "test456";
$dbname = "project";

$conn = mysqli_connect($servername, $username, $password, $dbname);
   
  if (!preg_match ("/^[a-zA-z]*$/", $lname) ) {   
    echo "<script>
        alert('Only alphabets are allowed!');
        window.location.href='profile.php';
        </script>";
  }else{     
    if ($conn) {
      mysqli_select_db($conn, $dbname);
      $sql = " UPDATE users SET lname = '$lname' WHERE email = '$Email' ";
      mysqli_query($conn, $sql);
      header('location:profile.php');
      }else{
        echo "No change made";
      }
  }

?>
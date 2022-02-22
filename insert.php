<?php 
header("location:Register.php");

$server="localhost";
$user = "shlok";
$Pass = "test456";
$db = "project";


$conn = mysqli_connect($server, $user, $Pass, $db);

if($conn){
  echo "Connection Successful <br>";
}
else{
  echo "Not connected ";
}

mysqli_select_db($conn, $db);

$fname = $_POST['fname'];
$lname = $_POST['lname'];
$email = $_POST['email'];
$pass = $_POST['password'];

$q = " SELECT * from users where email = '$email' ";

$result = mysqli_query($conn, $q);

$num = mysqli_num_rows($result);

if($num == 1){
  echo "Email already exists";
}
else{
  //$encpass = md5($pass);
  echo "Account Created";

  $q2 = "INSERT INTO users (fname, lname, email, password, status) VALUES ('$fname', '$lname', '$email', '$pass', 'offilne')";

  mysqli_query($conn, $q2);

}

?>
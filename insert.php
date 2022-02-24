<?php 

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

if (!preg_match ("/^[a-zA-z]*$/", $fname) ) {    
    echo "<script>
        alert('Only alphabets are allowed!');
        window.location.href='profile.php';
        </script>";
      }

if (!preg_match ("/^[a-zA-z]*$/", $fname) ) {    
    echo "<script>
        alert('Only alphabets are allowed!');
        window.location.href='profile.php';
        </script>";;
      }

if (!preg_match ("^[a-zA-Z0-9+_.-]+@[a-zA-Z0-9.-]+$/", $fname) ) {    
    echo "<script>
        alert('Only alphabets are allowed!');
        window.location.href='profile.php';
        </script>";;
      }

$q = " SELECT * from users where email = '$email' ";

$result = mysqli_query($conn, $q);

$num = mysqli_num_rows($result);

if($num == 1){
  echo "<script>
        alert('Email already registered!');
        window.location.href='Register.php';
        </script>";;
}
else{
  //$encpass = md5($pass);
  echo "<script>
        alert('Account Successfully Created!');
        window.location.href='Register.php';
        </script>";;

  $q2 = "INSERT INTO users (fname, lname, email, password, status, score) VALUES ('$fname', '$lname', '$email', '$pass', 'offilne', '0')";

  mysqli_query($conn, $q2);
}

?>
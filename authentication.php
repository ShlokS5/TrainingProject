<?php

$fnameErr = $emailErr = $genderErr = $lnameErr = $passErr = $PassErr = "";
$fname = $_POST['fname'];
$lname = $_POST['lname'];
$email = $_POST['email'];
$gender = $_POST['gender'];
$pass = $_POST['password'];
$Pass = $_POST['Password'];


  if(empty($fname){$fnameErr = "Name is required";}
  else {$name = test_input($fname);
    if (!preg_match("/^[a-zA-Z-']*$/",$fname)) {
      $fnameErr = "Only letters allowed";
    }
  }

  if (empty($lname) {
    $lnameErr = "Name is required";
  } else {
    $lname = test_input($lname);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z-']*$/",$lname)) {
      $lnameErr = "Only letters allowed";
    }
  }

if (empty($email) {
    $emailErr = "Email is required";
  } else {
    $email = test_input($email);
    // check if e-mail address is well-formed
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $emailErr = "Invalid email format";
    }
  }

if (empty($password) {
  $passErr = "Password Required";
} else{
  if (!preg_match("^\S*(?=\S{8,})(?=\S*[a-z])(?=\S*[A-Z])(?=\S*[\d])\S*$", $password)) {
    $passErr = "Password must be atleast 8 characters long and must contain upper-case, lowercase and number";
  }
}

if (empty($Password) {
  $PassErr = "Password Required";
} else{
  if ($password != $Password) {
    $PassErr = "passwords do not match";
  }
}

if (empty($gender)) {
  %genderErr = "Select a gender";
}


function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

?>
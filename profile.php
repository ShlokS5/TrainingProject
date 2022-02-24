<?php 
session_start();

if(empty($_SESSION)){
  header('location:Register.php');
}else{
}

$email = $_SESSION['email'];

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	<title>Profile</title>
</head>
<body>
	<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
      <a class="navbar-brand"> TIC TAC TOE </a>
      <a class="navbar-brand" href="home.php">Home</a>
      <a class="navbar-brand" href="profile.php">Edit Profile</a>
      <a class="navbar-brand" href="logout.php">Logout</a>
    </div>
  </nav>

  <div class="container-fluid text-dark">
    <div class="row content " style="height:515px">
    <div class="h-100 col-sm-3 sidenav bg-light">
      
      <?php

        $page = $_SERVER['PHP_SELF'];
        $sec = "30";
        header("Refresh: $sec; url=$page");

        $servername = "localhost";
        $username = "shlok";
        $password = "test456";
        $dbname = "project";

        $conn = new mysqli($servername, $username, $password, $dbname);
        
        if ($conn->connect_error) {
          die("Connection failed: " . $conn->connect_error);
        }
        echo "<br>"."ONLINE PLAYERS -";
        $sql = "SELECT email, score FROM users WHERE status = 'online'";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {

          while($row = $result->fetch_assoc()) {
            echo  "<br>".$row["email"]." - ";
            echo $row["score"];
          }
        } else {
          echo "No Players Online";
        }

        echo "<br>"."<br>"."<br>"."OFFLINE PLAYERS -";

        $sql = "SELECT email, score FROM users WHERE status = 'offline'";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {

          while($row = $result->fetch_assoc()) {
            echo  "<br>".$row["email"]." - ";
            echo $row["score"];
          }
        } else {
          echo "No Players Online";
        }
        $conn->close();
      ?>
    </div>
    <div class="col-lg-9 bg-success py-6 ">
      <form action="changefname.php" method="post">
        <br> &nbsp First Name <input type="text" name="fname" id="fname" placeholder="" required> &nbsp
         <button type="submit" class="btn btn-primary bg-white text-dark my-2">Change</button> <br> <br>
      </form>
      <form action="changelname.php" method="post">
        <br> &nbsp Last Name <input type="text" name="lname" id="lname" placeholder="" required> &nbsp
         <button type="submit" class="btn btn-primary bg-white text-dark my-2">Change </button> <br> <br>
      </form>
      <form action="changepass.php" method="post">
        <br> &nbsp Password <input type="password" name="pass" id="pass" placeholder="" required> 
        &nbsp &nbsp Re-enter Password <input type="password" id="pass2" name="pass2" placeholder="" required> &nbsp
         <button type="submit" class="btn btn-primary bg-white text-dark my-2">Change</button> <br> <br>
      </form>
    </div>
  </div>
  
</body>
</html>
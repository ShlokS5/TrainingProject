<?php 

session_start();
if(empty($_SESSION)){
  header('location:Register.php');
}else{
}
   
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Homepage</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
      <a class="navbar-brand" >TIC TAC TOE</a>
      <a class="navbar-brand" href="Register.php">Login</a>
      <a class="navbar-brand" href="home.php">Home</a>
      <a class="navbar-brand" href="profile.php"> Edit Profile</a>
      <a class="navbar-brand" href="logout.php">Logout</a>
    </div>
  </nav>
  
<div class="container-fluid text-center">    
  <div class="row content " style="height:515px">
    <div class="h-100 col-sm-3 sidenav bg-light">
      <?php

        $page = $_SERVER['PHP_SELF'];
        $sec = "20";
        header("Refresh: $sec; url=$page");

        $servername = "localhost";
        $username = "shlok";
        $password = "test456";
        $dbname = "project";

        $conn = new mysqli($servername, $username, $password, $dbname);
        
        if ($conn->connect_error) {
          die("Connection failed: " . $conn->connect_error);
        }

        $sql = "SELECT email, score FROM users WHERE status = 'online'";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {

          while($row = $result->fetch_assoc()) {
            echo $row["email"]." - ";
            echo $row["score"]. "<br>";
          }
        } else {
          echo "No Players Online";
        }
        $conn->close();
      ?>
    </div>
    <div class="col-sm-9 text-center"> 
      <h1>Play Here</h1>
      <style>

    body{
      background: seagreen;
      font-family: sans-serif;
    }

    .messagesection{
      height: 50px;
      text-align: center;
      color: white;
      font-weight: bolder;
      font-size: 20px;
    }

    .gameboard{
      position: absolute;
      top: 50%;
      left: 63%;
      transform: translate(-50%, -50%);
      width: 300px;
      height: 300px;
    }

    .row{
      height: 32%;
    }

    .col{
      height: 100%;
      width: 32%;
      border: 2px solid white;
      float: left;
      font-size: 70px;
      font-weight: bolder;
      color: white;
      text-align: center;
      cursor: pointer;
    }

  </style>
  
  <div class="messagesection" id="messagesection"></div>
  <div class="gameboard">
    <div class="row">
      <div class="col">
        <input type="radio" name="1" id="1">
      </div>
      <div class="col">
        <input type="radio" name="2" id="2">
      </div>
      <div class="col">
        <input type="radio" name="3" id="3">
      </div>
    </div>  

    <div class="row">
      <div class="col">
        <input type="radio" name="4" id="4">
      </div>
      <div class="col">
        <input type="radio" name="5" id="5">
      </div>
      <div class="col">
        <input type="radio" name="6" id="6">
      </div>
    </div>
    
    <div class="row">
      <div class="col">
        <input type="radio" name="7" id="7">
      </div>
      <div class="col">
        <input type="radio" name="8" id="8">
      </div>
      <div class="col">
        <input type="radio" name="9" id="9">
      </div>
    </div>
  </div>

    </div>
  </div>
</div>

</body>
</html>

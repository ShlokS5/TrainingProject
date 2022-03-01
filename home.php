<?php 

session_start();
if(empty($_SESSION)){
  header('location:Register.php');
}else{
}

$Email = $_SESSION['email'];

  $servername = "localhost";
  $username = "shlok";
  $password = "test456";
  $dbname = "project";

  $conn = new mysqli($servername, $username, $password, $dbname);
        
  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
    }


$winner = 'n';
$box = array('','','','','','','','','');
if (isset($_POST["gobtn"]))
  {
    $box[0] = $_POST["box0"];
    $box[1] = $_POST["box1"];
    $box[2] = $_POST["box2"];
    $box[3] = $_POST["box3"];
    $box[4] = $_POST["box4"];
    $box[5] = $_POST["box5"];
    $box[6] = $_POST["box6"];
    $box[7] = $_POST["box7"];
    $box[8] = $_POST["box8"];

    if(($box[0] == 'x' && $box[1] == 'x' && $box[2] == 'x')  || ($box[3] == 'x' && $box[4] == 'x' && $box[5] == 'x') || ($box[6] == 'x' && $box[7] == 'x' && $box[8] == 'x') || ($box[0] == 'x' && $box[3] == 'x' && $box[6] == 'x')  || ($box[1] == 'x' && $box[4] == 'x' && $box[7] == 'x') || ($box[2] == 'x' && $box[5] == 'x' && $box[8] == 'x') || ($box[0] == 'x' && $box[4] == 'x' && $box[8] == 'x') || ($box[2] == 'x' && $box[4] == 'x' && $box[6] == 'x') )
    {
      $winner = 'x';
      Print "<h1>You Win!</h1>";
      $sql = "UPDATE users SET score = score + 1  WHERE email = '$Email'";
      mysqli_query($conn, $sql);

    }

    $blank = 0;
    for ($i = 0; $i <= 8 ; $i++)
    {
      if($box[$i] == '')
      {
        $blank = 1;
      }
    }
    if($blank == 1)
    {
      $i = rand() % 8;
      while($box[$i] != '')
      {
        $i = rand() % 8;
      }
      $box[$i] = 'o';
      if(($box[0] == 'o' && $box[1] == 'o' && $box[2] == 'o')  || ($box[3] == 'o' && $box[4] == 'o' && $box[5] == 'o') || ($box[6] == 'o' && $box[7] == 'o' && $box[8] == 'o') || ($box[0] == 'o' && $box[3] == 'o' && $box[6] == 'o')  || ($box[1] == 'o' && $box[4] == 'o' && $box[7] == 'o') || ($box[2] == 'o' && $box[5] == 'o' && $box[8] == 'o') || ($box[0] == 'o' && $box[4] == 'o' && $box[8] == 'o') || ($box[2] == 'o' && $box[4] == 'o' && $box[6] == 'o') )
      {
        $winner = 'o';
        Print "<h1>You Lose!</h1>";
        $q2 = "UPDATE users SET score = score - 1  WHERE email = '$Email'";
        mysqli_query($conn, $q2);
      }
      
    }
    else if ($winner == 'n')
    {
      $winner = 't';
      Print "<h1>Game Tied!</h1>";
    }
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

<script type="text/javascript">

    var idleTime = 0;
    $(document).ready(function () {

        var idleInterval = setInterval(timerIncrement, 60000); 

        $(this).mousemove(function (e) {
            idleTime = 0;
        });
        $(this).keypress(function (e) {
            idleTime = 0;
        });
    });

    function timerIncrement() {
        idleTime = idleTime + 1;
        if (idleTime > 10) { 
            window.location = 'logout.php';
        }
    }
</script>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
      <a class="navbar-brand" >TIC TAC TOE</a>
      <a class="navbar-brand" href="home.php">Home</a>
      <a class="navbar-brand" href="profile.php"> Edit Profile</a>
      <a class="navbar-brand" href="logout.php">Logout</a>
    </div>
  </nav>
  
<div class="container-fluid text-center">    
  <div class="row content " style="height:515px">
    <div class="h-100 col-sm-3 sidenav bg-light">
      
      <?php

        //$page = $_SERVER['PHP_SELF'];
        //$sec = "60";
        //header("Refresh: $sec; url=$page");

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
    <div class="col-sm-9 text-center"> 
      <h1>Play Here</h1>
      <style>
        body {
          background-color: seagreen;
          text-align: center;
        }
        #ip{
            border: 2px solid black;
            padding: 25px; 
            width: 200px;
            height: 15px;
            margin-bottom: 20px;
            margin-top: 20px;
            margin-right: 20px;
            font-size: 30px;
        }
        #go{
           
            width: 200px;
            height: 15px;
            margin-top: 20px;
            padding: 25px;
        }
        </style>
      <div style="margin:0 auto;width:75%;text-align:center;">
        <form name = "ticktactoe" method = "post" action = "home.php">
          <?php
            for($i = 0; $i <=8; $i++)
            {
              printf('<input type = "text" id = "ip" name = "box%s" value = "%s" pattern = "x|o">', $i, $box[$i]);
              if ($i == 2 || $i == 5 || $i == 8){
              print("<br>");
              }
            }
            if($winner == 'n')
            {
              print('<input type = "submit" name = "gobtn" value = "Next Move" id = "go">');
            }
            else
            {
              print('<input type = "button" name = "newgamebtn" value = "Play Again" id = "go" onclick = "window.location.href=\'home.php\'">');
            }
        
          ?>
        </form>
      </div>
      
</body>
</html>

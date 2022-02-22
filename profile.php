<?php 

session_start();

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
      <a class="navbar-brand" >TIC TAC TOE</a>
      <a class="navbar-brand" href="Register.php">Login</a>
      <a class="navbar-brand" href="home.php">Home</a>
      <a class="navbar-brand" href="profile.php">Profile</a>
      <a class="navbar-brand" href="logout.php">Logout</a>
    </div>
  </nav>
</body>
</html>
<?php 
$Email = $_SESSION['email'];
$servername = "localhost";
$username = "shlok";
$password = "test456";
$dbname = "project";

$conn = new mysqli($servername, $username, $password, $dbname);
        
        if ($conn->connect_error) {
          die("Connection failed: " . $conn->connect_error);
        }

        $sql = "SELECT * FROM users WHERE email = '$Email'";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {

          while($row = $result->fetch_assoc()) {
            echo $row["fname"]." ";
            echo $row["lname"]."<br>";
            echo $row["email"]."<br>";
            echo $row["password"]."<br>";
            
          }
        } else {
          echo "No Players Online";
        }
        $conn->close();
?>
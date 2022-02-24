<?php

session_start();
$chosen = "";

$board = array("1", "2", "3", "4", "5", "6", "7", "8", "9");
$player = array();
$computer = array();

$chosen = $_POST['chosen'];


?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>

	<style>

		body{
			background: green;
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
			left: 50%;
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
	      <div class="col" onclick=""></div>
	      <div class="col" onclick=""></div>
	      <div class="col" onclick=""></div>
	    </div>  

	    <div class="row">
	      <div class="col" onclick=""></div>
	      <div class="col" onclick=""></div>
	      <div class="col" onclick=""></div>
	    </div>
	    
	    <div class="row">
	      <div class="col" onclick=""></div>
	      <div class="col" onclick=""></div>
	      <div class="col" onclick=""></div>
	    </div>

	    <div>
		    <form method="post" action="game.php">
		      <br> &emsp; &emsp; &emsp; &emsp;<input type="text" name="chosen" id="chosen">
		      <button type="submit" class="btn btn-primary bg-light my-2"> </button> 
		    </form>
	    </div>

	  </div>

	</div>
</body>
</html>

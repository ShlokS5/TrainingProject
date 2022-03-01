`<?php

session_start();


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

	<script type="text/javascript">
		
		
		var matrix = [	[-1, -1, -1],
						[-1, -1, -1],
						[-1, -1, -1]	]
		var win = -1;


		function playeraction(elem, row, col){

			matrix[row][col] = 1 ;
			if (elem.innerHTML != "") {return;}
			else { elem.innerHTML = "X";

				};
		};

		function wincheck(matrix){
			for (var i = 0; i < 3; i++) {
				if (matrix[i][0] == matrix[i][1] == matrix[i][2]) win = matrix[i, 0];
				
				if (matrix[0][i] == matrix[1][i] == matrix[2][i]) win = matrix[0, i];
				}

				if (matrix[0][0] == matrix[1][1] == matrix[2][2]) win = matrix[0,0];

				if (matrix[0][2] == matrix[1][1] == matrix[2][0]) win = matrix[0,2];

				if(win == '1'){
					// player wins
				} else if(win == 'O'){
					// computer wins
				} else{
					// tie
				}
	</script>
 	
	
	<div class="messagesection" id="messagesection"></div>
	  <div class="gameboard">
	    <div class="row">
	      <div class="col" onclick="playeraction(this , 0, 0)"></div>
	      <div class="col" onclick="playeraction(this , 0, 1)"></div>
	      <div class="col" onclick="playeraction(this , 0, 1)"></div>
	    </div>  

	    <div class="row">
	      <div class="col" onclick="playeraction(this ,1 ,0)"></div>
	      <div class="col" onclick="playeraction(this ,1 ,1)"></div>
	      <div class="col" onclick="playeraction(this ,1 ,2)"></div>
	    </div>
	    
	    <div class="row">
	      <div class="col" onclick="playeraction(this ,2 ,0)"></div>
	      <div class="col" onclick="playeraction(this ,2 ,1)"></div>
	      <div class="col" onclick="playeraction(this ,2 ,2)"></div>
	    </div>

	  </div>

	</div>
</body>
</html>

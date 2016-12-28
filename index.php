<html>
	<head>
		<meta charset="UTF-8"/>

		<style>
			#game-ground {
				position: absolute;
				top: 50%;
				left: 50%;
				margin-top: -100px;
				margin-left: -104px;
			}

			#matrix td {
				width: 50px;
				height: 50px;
				border: 1px solid black;
			}

			#player-score {
				float: right;
			}
		</style>
	</head>
	<body>
		
		<div id="game-ground">
			<span id="enemy-score">0</span>
			<table id="matrix">
				<tr>
					<td onclick="clickEvent(this)" class="elem"></td><td onclick="clickEvent(this)" class="elem"></td><td onclick="clickEvent(this)" class="elem"></td><td onclick="clickEvent(this)" class="elem"></td>
				</tr>
				<tr>
					<td onclick="clickEvent(this)" class="elem"></td><td onclick="clickEvent(this)" class="elem"></td><td onclick="clickEvent(this)" class="elem"></td><td onclick="clickEvent(this)" class="elem"></td>
				</tr>
				<tr>
					<td onclick="clickEvent(this)" class="elem"></td><td onclick="clickEvent(this)" class="elem"></td><td onclick="clickEvent(this)" class="elem"></td><td onclick="clickEvent(this)" class="elem"></td>
				</tr>
				<tr>
					<td onclick="clickEvent(this)" class="elem"></td><td onclick="clickEvent(this)" class="elem"></td><td onclick="clickEvent(this)" class="elem"></td><td onclick="clickEvent(this)" class="elem"></td>
				</tr>
			</table>
			<span id="player-score">0</span>
		</div>
		
	</body>
</html>

<script>
	var array_matrix_element = document.getElementsByClassName('elem');
	var player_score = document.getElementById('player-score');

	function setInitial() {
		for( i = 0 ; i < array_matrix_element.length ; i++){
			array_matrix_element[i].style.backgroundColor = "white"
		}
	}

	for(i in array_matrix_element){
		
	}

	function clickEvent(e) {
			if(e.style.backgroundColor == "black") {
				player_score += parseInt(player_score.innerHTML);
			}
	}

	

	setInterval(function(){
		setInitial();
		var random = parseInt(Math.random() * (array_matrix_element.length));
		array_matrix_element[random].style.backgroundColor = "black";
	}, 500);



	

</script>
<?php

/*
	Condicionais (if, else)
*/

	$va1 = 'Fulano';
	$va2 = 'Fulan';
	
	if($va1 == $va2){
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
	<style type="text/css">
		
		.class1{
			width: 500px;
			height: 500px;
			margin: auto;
			background-color: green;
		}

		.p1{
			color: black;
			font-family: impact;
			text-shadow: 1px 1px 5px white;
			text-align: center;
			font-size: 3em;
		}

		.class2{
			width: 500px;
			height: 500px;
			margin: auto;
			background-color: red;
		}

		.p2{
			color: white;
			font-family: impact;
			text-shadow: 1px 1px 5px black;
			text-align: center;
			font-size: 3em;
		}

	</style>
</head>
<body>
	<div class="class1">
		<p class="p1" >
			
			Condição 1

		</p>
	</div>
</body>
</html>

<?php 
	}

else{

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
	<style type="text/css">
		
		.class1{
			width: 500px;
			height: 500px;
			margin: auto;
			background-color: green;
		}

		.p1{
			color: black;
			font-family: impact;
			text-shadow: 1px 1px 5px white;
			text-align: center;
			font-size: 3em;
		}

		.class2{
			width: 500px;
			height: 500px;
			margin: auto;
			background-color: red;
		}

		.p2{
			color: white;
			font-family: impact;
			text-shadow: 1px 1px 5px black;
			text-align: center;
			font-size: 3em;
		}

	</style>
</head>
<body>
	<div class="class2">
		<p class="p2">
			
			Condição 2

		</p>
	</div>
</body>
</html>

<?php

	

?>
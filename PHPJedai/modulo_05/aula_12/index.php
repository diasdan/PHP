<?php

	/*
		LOOPINGS
	*/

		/*for*/

	for($c = 0; $c < 10; $c++){	
		echo 'Hello World! <br>';
	}

	echo '<br>';

		/*while*/

	$c1 = 0;

	while($c1 <= 10){
		echo $c1 . ' passo <br>'; 
		$c1++;
	}

	echo '<br>';

		/*do while*/

	$count = 0;
	
	do{
		echo 'Hello World!';
		echo '<br>';
		$count++;
	} while($count < 10);

?>
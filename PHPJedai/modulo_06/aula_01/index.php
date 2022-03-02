<?php
	
	// Laço For Each


	$arr = array('Nome1', 'Nome2', 'Nome3', 'Nome4');
/*
	foreach($arr as $key => $value){
		echo $key;
		echo '=>';
		echo $value;
		echo '<hr>';
	}

*/

	$total = count($arr);

	for($i = 0; $i < $total; $i++){
		echo $arr[$i];
		echo '<hr>';
	}

?>
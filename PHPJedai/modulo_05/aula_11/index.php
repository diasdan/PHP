<?php

/*
	Operadores Lógicos
*/

	$n1 = 'valor1';
	$n2 = 'valor2';
	$n3 = 'valor3';

	// Operador Lógico E - &&

	if($n1 == $n1 && $n2 == $n2){
		echo 'Verdade';
	} else {
		echo 'Falso';
	}

	echo '<br>';

	// Operador lógico OU - ||


	if($n1 == $n2 || $n1 != $n3){
		echo 'Verdade';
	} else {
		echo 'Falso';
	}

?>
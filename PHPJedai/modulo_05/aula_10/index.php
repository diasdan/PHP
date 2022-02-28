<?php
	
/*
	OPERADORES
*/

	$n1 = 'Nome1';
	$n2 = 'Nome2';

	/*
		O sinal de "=" uma vez, sempre significará atribuição de valor,
		e sempre retorna verdadeiro.
	*/

	if($n1 = $n2){
		echo $n1;
	}

	echo '<br>';

	/*
		O sinal de "==" compara se os valores são iguais
	*/

	if($n1 == $n2){
		echo 'Verdadeiro';
	} else {
		echo 'Falso';
	}

	echo '<br>';

	/*
		O sinal de "!=" compara se os valores são diferentes
	*/

	if($n1 != $n2){
		echo "Verdadeiro";
	} else {
		echo "Falso";
	}

	echo '<br>';

	/*
		O sinal de "===" compara se os valores são identicos;
	*/

	if(2 === '2'){
		echo "Iguais";
	} else {
		echo "Diferentes";
	}

	echo '<br>';

	if(2 !== '2'){
		echo "Verdadeiro";
	} else {
		echo "Falso";
	}

?>
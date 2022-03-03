<?php
	
	include('Exemplo.class.php');
	
	$exemplo = new Exemplo;
	$exemplo->setVar1('Nome2');
	echo $exemplo->getVar1();
	echo '<br>';

	$exemplo->var2 = 'Nome1';

	echo $exemplo->var2;

	$exemplo2 = new Exemplo;

	echo Exemplo::$var3;

	echo '<br>';

	echo Exemplo::metodoEstatico();

?>
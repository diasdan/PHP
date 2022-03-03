<?php
		
	include('Class1.php');

	$teste = new Class1('Fulano', 0);

	echo "Olá, ".$teste->getNome()."! Você tem ".$teste->getIdade()." anos.";



?> 
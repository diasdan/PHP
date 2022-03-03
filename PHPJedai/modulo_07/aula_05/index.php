<?php

	include('Interface1.php');

	class Teste implements Interface1 {

		public function printOnScreen($par){
			echo $par;	
		}

	}

	$teste = New Teste;
	$teste->printOnScreen('Hello!');
	
?>
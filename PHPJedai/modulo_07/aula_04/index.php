<?php

	abstract class Teste{

		public function func1(){
			echo 'chamando funçao 1';
		}

		abstract function func2();
	}

	class Principal0{
		public static function meuOutroMetodo(){
			echo 'outro metodo estatico';
		}
	}

	class Principal extends Teste{

		public function func2(){
			echo 'chamando funcao 2 abstrato';
		}

		public static function metodoEstatico(){
			echo 'metodo estatico';
		}

		public function funcao(){
			Principal0::meuOutroMetodo();
			echo '<br>';
			self::metodoEstatico();
		}

	}

	$principal = new Principal;
	$principal->funcao();
	

?>

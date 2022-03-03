<?php

	class Filha {

		protected function teste(){
			echo 'chamando função teste';
		}

		public function printHello(){
			echo 'Olá Mundo!';
		}
	}


	class Pai extends Filha {

		public function mostrarTchau(){
			echo 'Tchau Mundo!';
			echo '<br>';
			$this->teste();
		}

		public function mostraHello(){
			parent::printHello();
		}

	}

	$pai = new Pai;

	$pai->mostrarTchau();
	$pai->mostraHello();

	



?>
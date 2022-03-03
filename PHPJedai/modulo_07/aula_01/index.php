<?php
	
	/*
		Orientação a objetos no PHP	

		define();
		$variavel;
		func();

		Pessoa
		{
			nome
			idade
			peso

			métodos
				crescer()
				comer()

		}

	*/


	class Pessoa{

		private $name;
		private $lastname;
		private $age;
		private $weight;

		public function grow(){
			$this->age += 1;
		}

		private function eat(){

		}


	}


	$pessoa = new Pessoa;

	$pessoa->age = 25;
	echo $pessoa->name; 

?>
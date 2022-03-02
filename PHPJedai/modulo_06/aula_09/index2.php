<?php


	session_start();
	if(isset($_SESSION['nome'])){
	echo $_SESSION['nome'];
	}

	/*
		Destroi a variável retirando o valor da variável
	*/

	unset($_SESSION['nome']);
	echo $_SESSION['nome'];

	/*
		Destroi todas as Sessões
	*/

	session_destroy();



?>
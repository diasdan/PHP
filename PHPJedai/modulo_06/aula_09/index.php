<?php

	/*
		Sessões - é quando um valor é armazenado em uma variavel, e mesmo que o usuário fecha a aba do navegador, quando tele retornar, a variavel ainda estará ali armazenado, ela só é
		destruída quando o usuário desliga o navegador

		Cookie - também é um valor guardado na variável, porém nele é configurado um tempo para que fique armazenado no computador, assim, mesmo que o usuário desligue o navegador, a 
		variavel nãos erá destruída.
	*/

		/*
		
		sessions

		session_start();
		$_SESSION['nome'] = 'Danilo';
*/

		// Cookies

		session_start();
		setcookie('name', 'Fulano', time() + (60*60*24),'/');

		echo $_COOKIE['name'];

		// Para destruir um cookie, colocar-se um tempo negativo "( - (60*60*26))"

?>
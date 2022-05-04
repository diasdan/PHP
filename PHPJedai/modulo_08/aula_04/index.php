<?php

	date_default_timezone_set("America/Sao_Paulo");

	$pdo = new PDO("mysql:host=localhost;dbname=base_dados", "root", "");

	$name = 'Carlos';
	$lastname = 'Antônio';
	
	$time = date("Y-m-d H:i:s");

	$sql = $pdo->prepare("DELETE FROM clientes WHERE name=? AND lastname=?");

	if($sql->execute(array($name, $lastname))){		

		echo "Cliente deletado da base de dados às ".$time;
	}





?>
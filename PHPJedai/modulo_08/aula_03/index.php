<?php


	date_default_timezone_set("America/Sao_Paulo");

	$pdo = new PDO("mysql:host=localhost;dbname=base_dados", "root", "");

	$time = date('Y-m-d H:i:s');
	$id = 3;

	$sql = $pdo->prepare("UPDATE clientes SET name='Rubens', lastname='Carvalho', age=36 WHERE id=$id");

	if($sql->execute()){

		echo "Base de dados atualizada em ".$time;

	}
	
?>



<?php

	$pdo = new PDO("mysql:host=localhost;dbname=base_dados", "root", "");


	$sql = $pdo->prepare("SELECT * FROM professores INNER JOIN turmas ON professores.turma = turmas.turma");

	$sql->execute();

	$info = $sql->fetchAll();

		foreach($info as $key => $v){
			echo 

	}

?>
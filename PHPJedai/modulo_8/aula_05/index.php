<?php

	$pdo = new PDO("mysql:host=localhost;dbname=base_dados", "root", "");


	$sql = $pdo->prepare("SELECT name, turma FROM professores");

	$sql->execute();

	$info = $sql->fetchAll();

		foreach($info as $key => $v){
		echo "- Nome: ".$v['name'];
		echo "<br>";
		echo "Turma: ".$v['turma'];
		echo "<hr>";
		echo "<br>";

	}

?>
<?php

	date_default_timezone_set('America/Sao_Paulo');

	$pdo = new PDO('mysql:host=localhost;dbname=base_dados', 'root', '');

	print_r($pdo);

	


?>



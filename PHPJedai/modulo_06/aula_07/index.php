<?php

/*	
	Funções Para Manipular Arrays
*/


	$array1 = array("key1" => "value1", "key2" => "value2");
	$array2 = array("key1" => "value3", "key2" => "value4");
	$result = array_merge($array1, $array2);
	print_r($result);
	echo "<br>";

	print_r(array_intersect_key($array1, $array2));



	$array3 = ['<p>Fulano</p>', 'Ciclano', '<h1>Beltrano</h1>'];

	// array_map('function', array): SERVE APARA APLICAR UMA FUNÇÃO EM TODOS OS VALORES DE UMA ARRAY

	print_r(array_map('strip_tags', $array3));

	echo "<br>";

	$letras = array("a", "b", "c", "d");
	print_r(array_map('ord', $letras));

?>
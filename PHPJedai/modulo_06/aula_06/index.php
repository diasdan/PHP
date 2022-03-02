<?php

/*
	Funções String
*/

	$nazg = "Ash nazg durbatuluk, ash nazg gimbatul, ash nazg thrakatuluk, agh Burzum-ishi krimpatul";

	echo "<h3>Funções String</h3>";
	echo "String: ".$nazg."<br><br>";

	/*Diminui o número de caracteres que um string contém*/

	echo "substr(): ". substr($nazg, 0, 8)."<br>";

	$nomes = explode(' ', $nazg);

    /*explode(): Separa a string em uma array baseado em um item que será o separador, no caso o espaço(' ')*/
	
	echo "explode(): ";
	print_r($nomes);
	echo '<br>';

	/*implode(): Junta uma array de strings em uma unica string separada por um
	delimitador*/

	echo "implode(): ";
	echo implode('-', $nomes).'<br>';

	/*strip_tags(): retira o código HTML*/

	$content = '<h1>Ash nazg durbatuluk </h1>ash nazg gimbatul';
	echo '<br>';
	echo 'Sem o strip_tags(): <br>';
	echo $content;
	echo '<br><br>';
	echo 'Com o strip_tags(): ';
	echo strip_tags($content);

	echo '<br><br>';

	/* htmlentities(): mostra o código HTML*/
	echo 'Sem o htmlentities(): '; 
	echo '<div style="width:30px; height:30px; background-color: blue;"></div>';
	echo 'Com o htmlentities(): '; 
	echo htmlentities('<div style="width:30px; height:30px; background-color: blue;"></div>');
?>
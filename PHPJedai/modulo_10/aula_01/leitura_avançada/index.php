<?php

    //Manipulando XML

    //Armazenando o .xml na variável $xml
    $xml = simplexml_load_file("arquivo.xml");

    //com o print_r é possível ver a estrutura de objeto do xml
    print_r($xml);

    echo "<br>";

    //Utilizando um valor do .xml
    echo $xml->nome;

    echo "<br>";
    //Criando um arquivo um xml

  $test_array = array(
        'Rodrigo' => 'nome',
        '29' => 'idade'
  );

    escreverXML($test_array, 'arquivo.xml');
    
    
    function escreverXML($arr, $nome){
        $xml = new SimpleXMLElement('<root/>');
        array_walk_recursive($arr, array($xml, 'addChild'));
        file_put_contents($nome, $xml->asXML());
    }

?>
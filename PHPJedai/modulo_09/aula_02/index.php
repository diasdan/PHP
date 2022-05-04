<?php

    //cria diretórios
    mkdir("folder");

    //cria 5 subdiretórios
    for($i=1;$i<=5;$i++){
        mkdir("folder/subfolder".$i);
    }

    //abre a pasta
    $handle = opendir("folder");

    // lê os diretórios dentro da pasta colocando seus nomes na variável $file usando a função readdir()
    while($file = readdir($handle)){
        
        //não escreve os diretórios inválidos "." e ".."
        if($file == '.' || $file == '..'){
            continue;
        }

        echo $file;
        echo "<br>";

    }

    //fecha o diretório
    closedir($handle);

?>
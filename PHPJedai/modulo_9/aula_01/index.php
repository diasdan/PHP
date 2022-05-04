<?php


    //criar 9 arquivos, escrever neles e ler

    for($i=0;$i<9;$i++){
        $content = "Conteúdo número: ".$i."\r\n";
        file_put_contents("file".$i.".txt", $content);
        echo nl2br(file_get_contents("file".$i.".txt"));
        //file_get_content("file.txt") - lê o conteúdo do arquivo
        //nl2br() - permite que o conteúdo do arquivo seja escrito respeitando a quebra de linhas dentro dele
    }

    //deletá-los 

    for($i=0;$i<9;$i++){
        unlink("file".$i.".txt");
    }






?>
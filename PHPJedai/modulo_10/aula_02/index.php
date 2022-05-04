<?php

    //Manipulando JSON

    //$json =  '{"a": 1, "b": 2, "c": 3, "d": 4, "e" : 5}';

    //var_dump(json_decode($json));
    
    /* Decodificando o JSON como Objeto ou Array:
    
    $obj = json_decode($json);

    echo $obj->a;

    $arr = json_decode($json, true);

    echo $arr['c'];

    $arr = ['nome' => 'Ricardo', 'cidade' => 'Florianopolis'];

    $json = json_encode($arr);
    echo $json;

    file_put_contents('arquivo.json', $json);
    */


?>
<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <body>
        
        <script type="text/javascript" src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <script type="text/javascript">
            $(function(){
                $.ajax({
                    url:'request.php',
                    dataType:'json'
                }).done(function(data){
                    console.log(data.nome);
                })
            })
        </script>

    </body>
    </html>



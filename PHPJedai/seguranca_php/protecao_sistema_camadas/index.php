

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema</title>
</head>
<body>
    <?php

        /* Lógica para evitar que o usuário burle as camadas do site */

        $logado = true;
        include('pages/home.php');
    ?>
  
</body>
</html>
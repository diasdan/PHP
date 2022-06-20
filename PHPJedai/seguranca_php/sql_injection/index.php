<?php

/*proteçao contra SQL Injection*/

try{
    $pdo = new PDO('mysql:host=localhost;dbname=nome_database', 'usuario', 'senha');
} catch(Exception $e){
    echo 'Não foi possível conectar.';
}

if(isset($_POST['acao'])){
    $login = $_POST['login'];
    $senha = $_POST['senha'];
    
    $sql = $pdo->prepare("SELECT * FROM `tabela` WHERE `login` = ? AND `senha` = ?"); /*variaveis substituidas pelos pontos de interrogação*/
    $sql->execute(array($login, $senha)); /* variaveis informadas na array em sql->execute*/

    if($sql->rowCount() == 1){
        echo 'Logado!';
    } else{
        echo 'Falhou login!';
    }
}

?>

<form method="post">
    <input type='text' name='login'>
    <input type='password' name='senha'>
    <input type='submit' name='acao' value='Enviar'>
</form>
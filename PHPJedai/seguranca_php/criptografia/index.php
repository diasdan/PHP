<?php

    /* Esse modelo tem como objetivo a criptografia de credenciais em sistemas de login */

    $login = "login";
    $senha = md5(sha1("senha")); // aqui ocorre a encriptação com duas camadas de criptografia (MD5 e SHA1)

    if(isset($_POST['login'])){
        if($_POST['login'] == $login && md5(sha1($_POST['senha'])) == $senha){
            echo "Logado com sucesso";
        } else {
            echo "Falha na verificação";
        }
    }



?>

<form method="post">
    <input type='text' name='login'>
    <input type='password' name='senha'>
    <input type='submit' name='acao' value='Enviar'>
</form>
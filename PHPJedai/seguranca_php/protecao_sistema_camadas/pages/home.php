<?php
    if(isset($logado)){
        echo "Informação exclusiva apenas para quem logou no sistema.";
    } else {
        echo 'Acesso negado! É necessário fazer login.';
    }
?>
<?php
    session_start();
    if(isset($_SESSION['login'])){

        //Arquivo exclusivo apenas para solicitação ajax!
        $data['info'] = 'Informação exclusiva para usuários logados';

        die(json_encode($data));
    } else 
    {
        echo "Arquivo protegido! Login necessário." ;
    }

?>
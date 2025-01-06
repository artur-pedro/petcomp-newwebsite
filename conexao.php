<?php

    $hostname="localhost";
    $bd="petcom59_petcomp_db";
    $usuario="root";
    $senha="";

    $mysqli = new mysqli($hostname, $usuario, $senha, $bd);

    if($mysqli->connect_errno){
        echo "falha ao conectar ao banco: ".$mysqli->connect_errno." ".$mysqli->connect_error;
    }

?>

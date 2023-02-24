<?php
    $hostname = "localhost";
    $bancodedados = "formulario";
    $usuario = "root";
    $senha = "";

    $mysqli = new mysqli($hostname, $usuario, $senha, $bancodedados);
    
   /* if($mysqli ->connect_errno){
    echo "erro";
    }else{
    echo "conectado com sucesso";
    }*/
    

?>
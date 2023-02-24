<?php

if(!empty($_GET['id'])){
    include_once('../../banco_de_dados/config.php');

    $id = $_GET['id'];

    $dados = "SELECT * FROM usuario WHERE id=$id";

    $result = $mysqli->query($dados);

    if($result->num_rows>0){

        $dado = "DELETE FROM usuario WHERE id=$id";
        $resulta = $mysqli->query($dado);
    }

}
header('location:paciente.php');


?>
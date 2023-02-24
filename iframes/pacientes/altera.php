<?php

    include_once('../../banco_de_dados/config.php');
    if(isset($_POST['altera'])){
        $id = $_POST['id'];
        $nome = $_POST['nome'];
        $email = $_POST['email'];
        $senha = $_POST['senha'];
        $ddd = $_POST['ddd'];
        $telefone = $_POST['telefone'];
        $sexo =  $_POST['sexo'];
        $data = $_POST['data'];
        $rua = $_POST['rua'];
        $bairro = $_POST['bairro'];
        $numero = $_POST['numero'];

        $altera = "UPDATE usuario SET nome='$nome',email='$email', senha='$senha',ddd='$ddd',
        contato='$telefone',sexo='$sexo',nascimento='$data',logradouro='$rua',bairro='$bairro',numero='$numero' WHERE id='$id'";

        $result = $mysqli->query($altera);
    }
    header('location:paciente.php');
?>
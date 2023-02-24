<?php

if(isset($_POST['submit'])){
     include_once('../../banco_de_dados/config.php');
 
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
 
     $resut = mysqli_query($mysqli, "INSERT INTO usuario(nome,email,senha,ddd,contato,sexo,nascimento,logradouro,bairro,numero) 
     VALUES ('$nome','$email','$senha','$ddd','$telefone','$sexo','$data','$rua','$bairro','$numero')");

 
 }

    include_once('../../banco_de_dados/config.php');
    $sql = "SELECT * FROM usuario";

    $result = $mysqli->query($sql);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
    <!--
    <link rel="stylesheet" href="	https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css"> -->
   
    <title>Controle de pacientes</title>
</head>
<body>

    <form action="paciente.php" method="post">
        <fieldset>
            <legend style="text-align:center ;">Cadastro de Paciente</legend>
            <p >
               <P > Nome: <input type="text" name="nome" id="nome" size="50%" maxlength="100" placeholder="Nome completo" required></P> 
               <P>E-mail: <input type="email" name="email" id="email" size="50%" maxlength="100" placeholder="Informe seu E-mail" required></P>
               <p>senha: <input type="password" name="senha" id="senha" size="40%" minlength="8" placeholder="No minimo 8 caracteres" required></p>
                <P>telefone: <input type="text" size="1%" maxlength="2" name="ddd" id="ddd" placeholder="DDD" required> &nbsp; 
                    <input type="text" name="telefone" id="telefone" size="30%" maxlength="9" placeholder="Numero" required></P>
                <p>
                    sexo: <br>
                    <input type="radio" name="sexo" id="mSexo" value="Masculino"> <label for="mSexo" >Masculino</label><br>
                    <input type="radio" name="sexo" id="fSexo" value="Feminino"> <label for="fSexo" >Feminino</label><br>
                    <input type="radio" name="sexo" id="oSexo" value="Outro"> <label for="oSexo" >outro</label><br>
                </p>
                <p> Nascimento: <input type="date" name="data" id="data" required> </p>
                <p>Lougradoro: <input type="text" name="rua" id="rua" size="30%" placeholder="Rua, AV, Trav, etc" required></p>
                <p>Barro: <input type="text" name="bairro" id="bairro" size="30%" placeholder="Informe o bairro" required>
                    N°: <input type="text" size="1%" maxlength="4" name="numero" id="numero" placeholder="300" required>
                </p>
                <p style="text-align: center;"><input type="submit" name="submit" id="submit"></p>
                
            </p>

        </fieldset>

    </form>
    <br>
    <br>
   <?php require('listapaciente.php') ?>
</body>
</html>
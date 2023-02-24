<?php

if(!empty($_GET['id'])){
     include_once('../../banco_de_dados/config.php');

     $id = $_GET['id'];

     $dados = "SELECT * FROM usuario WHERE id=$id";

     $result = $mysqli->query($dados);

     if($result->num_rows>0){
        while($dado = mysqli_fetch_assoc($result)){
            $nome = $dado['nome'];
            $email = $dado['email'];
            $senha = $dado['senha'];
            $ddd = $dado['ddd'];
            $telefone = $dado['contato'];
            $sexo =  $dado['sexo'];
            $data = $dado['nascimento'];
            $rua = $dado['logradouro'];
            $bairro = $dado['bairro'];
            $numero = $dado['numero'];
        }
     }else{
        header("location: paciente.php");
     }
 
 
 }

 else{
    header("location: paciente.php");
 }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="pacient.css">
    <title>Document</title>
</head>
<body>

    <form action="altera.php" method="post">
        <fieldset>
            <legend style="text-align:center ;">Cadastro de Paciente</legend>
            <p >
               <P > Nome: <input type="text" name="nome" id="nome" size="50%" maxlength="100" placeholder="Nome completo" value="<?php echo $nome?>"></P> 
               <P>E-mail: <input type="email" name="email" id="email" size="50%" maxlength="100" placeholder="Informe seu E-mail" value="<?php echo $email?>"></P>
               senha: <input type="text" name="senha" id="senha" size="40%" minlength="8" placeholder="No minimo 8 caracteres" value="<?php echo $senha?>">
                <P>telefone: <input type="text" size="1%" maxlength="2" name="ddd" id="ddd" placeholder="DDD" value="<?php echo $ddd?>"> &nbsp; 
                    <input type="text" name="telefone" id="telefone" size="30%" maxlength="9" placeholder="Numero" value="<?php echo $telefone?>"></P>
                <p>
                    sexo: <br>
                    <input type="radio" name="sexo" id="mSexo" value="Masculino" <?php echo ($sexo=='Masculino')? 'checked': '' ?>> <label for="mSexo"  >Masculino</label><br>
                    <input type="radio" name="sexo" id="fSexo" value="Feminino" <?php echo ($sexo=='Feminino')? 'checked': '' ?>> <label for="fSexo" >Feminino</label><br>
                    <input type="radio" name="sexo" id="oSexo" value="Outro" <?php echo ($sexo=='Outro')? 'checked': '' ?>> <label for="oSexo" >outro</label><br>
                </p>
                <p> Nascimento: <input type="date" name="data" id="data" value="<?php echo $data?>"> </p>
                <p>Lougradoro: <input type="text" name="rua" id="rua" size="30%" placeholder="Rua, AV, Trav, etc" value="<?php echo $rua?>"></p>
                <p>Barro: <input type="text" name="bairro" id="bairro" size="30%" placeholder="Informe o bairro"value="<?php echo $bairro?>">
                    N°: <input type="text" size="1%" maxlength="4" name="numero" id="numero" placeholder="300" value="<?php echo $numero?>">
                </p>
                <input type="hidden" name="id" value="<?php echo $id ?>">
                <p style="text-align: center;"><input type="submit" name="altera" id="altera"></p>
                
            </p>

        </fieldset>

    </form>
</body>
</html>
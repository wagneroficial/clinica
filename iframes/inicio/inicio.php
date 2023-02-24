<?php
include_once("../../banco_de_dados/config.php");

$tot_paciente = "SELECT COUNT(id) AS '' FROM usuario";
$resut_paciente = $mysqli ->query($tot_paciente);
$quant_paciente = mysqli_fetch_assoc($resut_paciente);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="inicio.css">
    <title>Document</title>
</head>
<body>
    <div class="direita">
        <input class="cima" type="text" readonly placeholder="Total de pacientes"><br>
        <input class="baixo" type="text" value="<?php echo $quant_paciente[''] ?>">
    </div>
    
    <div class="esquerda">
        <input class="cima" type="text" readonly placeholder="Total de medicos"><br>
        <input class="baixo" type="text" readonly>
    </div> <br>

    <div class="direita">
        <input class="cima" type="text" readonly placeholder="Total de exames"><br>
        <input class="baixo" type="text" readonly>
    </div>
    
    <div class="esquerda">
        <input class="cima" type="text" readonly placeholder="Total de consultas"><br>
        <input class="baixo" type="text" readonly>
    </div>


</body>
</html>
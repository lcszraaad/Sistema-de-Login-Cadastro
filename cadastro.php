<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
</head>
<body>

<form method="post" action="include/registrarbanco.php">

<fieldset>

    <albel for="login">Defina um Login:</label>

    <input type="text" name="login" >

    <albel for="login">Defina sua Senha:</label>

    <input type="password" name="senha" >

    <input type="submit" value="Prosseguir">

</fieldset>

</form>

<?php

  
$msgw = null;

if (isset($_GET['msg'])) {

    $msgw = $_GET['msg'];
}

if($msgw == 1) {
    echo "<script> alert('Por favor defina um Usuario e Senha.')</script>";
}

if($msgw == 2) {
    echo "<script> alert('Erro ao inserir dados no BD.')</script>";
}

?>
    
</body>
</html>
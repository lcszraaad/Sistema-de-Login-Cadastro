<?php
    
    include "../config/connectdb.php";


    $login = $_POST["login"];
    $senha = $_POST["senha"];

    if(empty ($login) && empty($senha)) {

      header('Location: ../cadastro.php?msg=1');

      exit;

    }

    $insert = "INSERT INTO usuario (usuario, senha)
           VALUES
           ('{$login }', '{$senha}')";

$query = mysqli_query($conn, $insert);

if (!$query) {

  header('Location: ../cadastro.php?msg=2');

}



    
?>
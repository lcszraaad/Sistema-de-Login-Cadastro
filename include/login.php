<?php

    include "../config/connectdb.php";


    $login = $_POST["login"]; 
    $senha = $_POST["senha"];


    if(empty ($login) && empty($senha)) {

        header("Location: ../index.php");

        exit;
    }

    $select = "SELECT 
                id, 
                usuario,
                senha 
            FROM 
                usuario
            WHERE 
                usuario = '{$login}' 
            AND senha = '{$senha}'";


$query = mysqli_query($conn, $select);

if (mysqli_num_rows($query) <= 0) {
    header("Location: ../index.php");

    die();
}

header("Location: ../home.php");



?>
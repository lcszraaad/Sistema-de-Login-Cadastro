<?php

$conn = mysqli_connect("localhost", "root", "", "sistema_login");

if (!$conn) {
    echo "Error: Falha ao conectar-se com o banco de dados. <br>" . PHP_EOL;
    echo "Debugging error: " . mysqli_connect_errno() . PHP_EOL;
    echo "Debugging error: " . mysqli_connect_error() . PHP_EOL;
    exit;
}

?>
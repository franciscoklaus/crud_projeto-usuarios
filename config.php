<?php

    $conn = "mysql:dbname=cadastro_usuarios;host=127.0.0.1";
    $dbuser = 'root';
    $dbpass= '';
    try {
        $pdo = new PDO($conn, $dbuser, $dbpass);
    } catch (PDOException $e) {
        echo "Erro: " . $e->getMessage();
    }

?>
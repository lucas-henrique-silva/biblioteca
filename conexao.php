<?php

$dsn = "mysql:host=localhost;dbname=biblioteca";
$user = "root";
$pass = "";

try {
    $pdo = new PDO($dsn, $user, $pass);
} catch (PDOException $e) {
    echo "Erro na conexão: " . $e->getMessage();
    exit;
}
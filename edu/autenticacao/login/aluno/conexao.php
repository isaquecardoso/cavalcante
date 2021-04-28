<?php

$localhost = 'mysql:login;host=localhost';
$user = 'root';
$password = '';

global $pdo;

try {
    //orientada a objetos com pdo
    $pdo = new PDO($localhost, $user, $password);
} catch (PDOException $e) {
    echo 'Connection failed: ' . $e->getMessage();
}

?>

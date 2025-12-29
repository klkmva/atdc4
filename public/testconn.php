<?php

$dsn = 'mysql:host=localhost;dbname=sata5105_atdc4;charset=utf8mb4';
$username = 'sata5105_atdc4';
$password = 'dyna-775-AT-15';
try {
    $pdo = new PDO($dsn, $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connection successful!";
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}
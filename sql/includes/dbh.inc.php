<?php

$dsn = "mysql:host=localhost;dbname=blog_app;";
$dbUserName = 'root';
$dbPassWord = '';


try {
    $pdo = new PDO($dsn, $dbUserName, $dbPassWord);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "Connection Failed: " . $e->getMessage();
}

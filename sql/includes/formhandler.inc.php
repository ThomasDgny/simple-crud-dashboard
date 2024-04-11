<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    try {
        require_once 'dbh.inc.php';
        $query = "INSERT INTO users(email, username, pwd) VALUES(?, ?, ?);";

        $stmt = $pdo->prepare($query);
        $stmt->execute([$email, $username, $password]);

        $pdo = null;
        $stmt = null;
        
        header('Location: ../main.php');
        die();
    } catch (PDOException $e) {
        die("Query Failed: " . $e->getMessage());
    }
} else {
    header('Location: ../main.php');
}

<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    // $id = $_GET['id'];
    $username = $_POST['username'];
    $email = $_POST['email'];

    try {
        require_once 'dbh.inc.php';

        $query = "UPDATE users SET username = ?, email = ? WHERE id = 4 ;";

        $stmt = $pdo->prepare($query);
        $stmt->execute([$username, $email]);

        $pdo = null;
        $stmt = null;

        header('Location: ../main.php');

        die();
    } catch (PDOException $e) {
        echo "Connection Failed: " . $e->getMessage();
    }
}

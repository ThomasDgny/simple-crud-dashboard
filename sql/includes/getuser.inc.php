<?php

function getUser($id, $pdo)
{
    if ($_SERVER['REQUEST_METHOD'] == 'GET') {
        try {
            $query = "SELECT * FROM users WHERE id = $id";

            $stmt = $pdo->prepare($query);
            $stmt->execute();

            $res = $stmt->fetch();
            return $res;
        } catch (PDOException $e) {
            $e->getMessage();
        }
    }
}

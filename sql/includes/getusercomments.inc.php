<?php

function getUserComments()
{
    if ($_SERVER['REQUEST_METHOD'] == 'GET') {
        include_once "dbh.inc.php";

        try {
            $query = "SELECT * FROM users, comments WHERE users.id = comments.userid";

            $stmt = $pdo->prepare($query);
            $stmt->execute();

            $res = $stmt->fetchAll();
            return $res;
        } catch (PDOException $e) {
            $e->getMessage();
        }
    }
}

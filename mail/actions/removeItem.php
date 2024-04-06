<?php

function removeItem($mail_id, $db)
{
    if ($_SERVER["REQUEST_METHOD"] == "GET") {
        $mail_id = mysqli_real_escape_string($db, $mail_id); 

        $sql = "DELETE FROM `mails` WHERE id = $mail_id";
        $query = mysqli_query($db, $sql);

        if ($query) {
            header('Location: dashboard.php');
            exit();
        } else {
            echo mysqli_error($db); 
            header('Location: dashboard.php');
            exit(); 
        }
    }
}

<?php

function addItem($email, $name, $message, $mail_id, $db)
{
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $emailPOST = $_POST["$email"];
        $namePOST = $_POST["$name"];
        $messagePOST = $_POST["$message"];

        $sql = "UPDATE `mails` SET email='$emailPOST', name='$namePOST', message='$messagePOST' WHERE id=$mail_id";

        $update = mysqli_query($db, $sql);

        if ($update) {
            echo "data updated";
        } else {
            mysqli_error($db);
        }
    }
}
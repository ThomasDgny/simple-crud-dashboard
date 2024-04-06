<?php

function addItem($db, $mail_id)
{
    $sql = "SELECT * FROM `mails` WHERE id=$mail_id";
    $query = mysqli_query($db, $sql);
    $mail = mysqli_fetch_assoc($query);
    return $mail;
}

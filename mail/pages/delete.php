<?php
include "../server/db.php";
include "../actions/removeItem.php";

$mail_id = $_GET['mail_id'];
removeItem($mail_id, $db);

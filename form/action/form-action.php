<?php

if ($_SERVER["REQUEST_METHOD"] == 'POST') {
    $first_name = htmlspecialchars($_POST["firstname"]);
    $last_name = htmlspecialchars($_POST["lastname"]);

    if (empty($first_name)) {
        exit();
        header("Location: ../form.php");
    }

    echo "User Data";
    echo "</br>";
    echo $first_name . $last_name;
} else {
    header("Location: ../form.php");
}

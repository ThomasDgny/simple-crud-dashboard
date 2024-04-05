<?php
include "../server/db.php";
?>


<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <div class="container py-5">
        <h3>Mails</h3>
        <a href="mail-form.php">Create New Mail</a>
        <table class="table table-striped">
            <ul>
                <?php
                foreach ($db as $mail) {
                    echo '<li> Email: ' . $mail["email"] . 'Name: ' . $mail["name"] . "Message" . $mail["message"] . "</li>";
                }
                ?>
            </ul>
        </table>
    </div>
</body>

</html>
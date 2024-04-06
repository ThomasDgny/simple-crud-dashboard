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
        <div class="d-flex justify-content-between">
            <h3>Mails</h3>
            <a class="btn btn-primary" href="mail-form.php">Create New Mail</a>
        </div>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Email</th>
                    <th scope="col">Name</th>
                    <th scope="col">Message</th>
                    <th scope="col">Edit</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $sql = 'SELECT * FROM `mails`';
                $res = mysqli_query($db, $sql);
                foreach ($res as $mail) {
                    echo ' <tr>
                    <th scope="row">' . $mail['id'] . '</th>
                    <th>' . $mail['email'] . '</th>
                    <th>' . $mail['name'] . '</th>
                    <th>' . $mail['message'] . '</th>
                    <th>
                    <a class="btn btn-primary" href="update.php?mail_id='.$mail['id'].'" role="button">Edit</a>
                    <a class="btn btn-danger" href="delete.php?mail_id='.$mail['id'].'" role="button">Delete</a>
                    </th>
                </tr>';
                }
                ?>
            </tbody>

        </table>
    </div>
</body>

</html>
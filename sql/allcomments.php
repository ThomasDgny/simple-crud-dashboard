<?php
include_once 'includes/getusercomments.inc.php';
$res =  getUserComments()
?>


<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>SQL</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <div class="container d-flex py-5 align-content-center justify-content-center">
        <div class="w-50">
            <h2 class="mb-5 text-center ">Comments</h2>

            <div class="mt-2">
                <?php
                if ($res) {
                    foreach ($res as $value) {
                        echo '
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title">' . $value['username'] . '</h5>
                                    <p class="card-text">' . $value['comment_text'] . '</p>
                                </div>
                            </div>
                                 ';
                    }
                } else {
                    echo 'no comments found';
                }
                ?>

            </div>
        </div>
</body>

</html>
<?php
include "../server/db.php";
include "../actions/addItem.php";
include "../actions/getItem.php";

$mail_id = $_GET['mail_id'];

$mail = addItem($db, $mail_id);

$email = $mail['email'];
$name = $mail['name'];
$message = $mail['message'];

addItem("email", "name", "message", $mail_id, $db)

?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Todo List</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <div class="container mt-5">

        <div class="mb-5">
            <h3>Update</h3>
            <h6><?php echo  $email; ?></h6>
        </div>

        <form method="post">
            <div class="mb-3">
                <label for="email" class="form-label">Email address</label>
                <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp" value='<?php echo $email; ?>'>
                <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
            </div>

            <div class="mb-3">
                <label for="name" class="form-label">Name</label>
                <input type="text" class="form-control" id="name" name="name" aria-describedby="name" value='<?php echo $name; ?>'>
            </div>

            <div class="mb-3">
                <label for="message" class="form-label">Comments</label>
                <textarea class="form-control" name="message" placeholder="Leave a comment here" id="message" style="height: 200px"><?php echo $message; ?></textarea>
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>
        </form>

    </div>
</body>

</html>
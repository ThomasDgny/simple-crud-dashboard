<?php
    include_once 'includes/dbh.inc.php';
    
    $query = "SELECT * FROM users";
    $stmt = $pdo->prepare($query);
    $stmt->execute();
    $res =  $stmt->fetchAll(PDO::FETCH_ASSOC);
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
            <h2 class="mb-5 text-center ">Twitter</h2>

            <form action="includes/search.inc.php" method="post" class="d-flex w-100 gap-4 align-items-center mb-5">
                <input type="text" class="form-control" id="name" name="name" aria-describedby="name" placeholder='Search a name'>
                <button type="submit" class="btn btn-primary">Search</button>
            </form>

            <a class="btn btn-primary" href="allcomments.php" role="button">All Comments</a>

            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">id</th>
                        <th scope="col">Name</th>
                        <th scope="col">Email</th>
                        <th scope="col">Join Date</th>
                        <th scope="col">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    foreach ($res as $value) {
                        echo ' 
                        <tr>
                            <th scope="row">' . $value['id'] . '</th>
                            <td> ' . $value['username'] . '</td>
                            <td>' . $value['email'] . '</td>
                            <td>' . $value['creted_date'] . '</td>
                            <td>
                                <a class="btn btn-primary" href="details.php?id='.$value['id'].'" role="button">Details</a>
                                <a class="btn btn-danger" href="delete.php?id='.$value['id'].'" role="button">Delete</a>
                            </td>
                            
                        </tr>
                        ';
                    }
                    ?>

                </tbody>
            </table>

        </div>
    </div>
</body>

</html>
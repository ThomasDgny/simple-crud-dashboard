<form action="includes/update.inc.php" method="post">

    <div class="mb-3">
        <label for="username" class="form-label">Name</label>
        <input type="text" class="form-control" id="username" name="username" aria-describedby="username" value='<?php echo $userDetails['username']; ?>'>
    </div>

    <div class="mb-3">
        <label for="email" class="form-label">Email</label>
        <input type="email" class="form-control" id="email" name="email" aria-describedby="email" value='<?php echo $userDetails['email']; ?>'>
        <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
    </div>

    <div class="mb-3">
        <label>Created Date</label>
        <p><?php echo $userDetails['creted_date']; ?></p>
    </div>

    <button type="submit" class="btn btn-primary">Update</button>
</form>
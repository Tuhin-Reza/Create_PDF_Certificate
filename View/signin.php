<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign In</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="style/signin.css" />

</head>
<body>
    <div class="container mt-5">
        <h2 class="mb-4">Sign In</h2>
        <form action="../controller/signinAction.php" method="post">
            <div class="mb-3">
                <label for="email" class="form-label">Email:</label>
                <input type="email" class="form-control" id="email" name="email">
            </div>
            
            <div class="mb-3">
                <label for="password" class="form-label">Password:</label>
                <input type="password" class="form-control" id="password" name="password">
            </div>
            <?php
                if (isset($_COOKIE["errorMessage"])) {
                    echo '<div class="alert alert-danger" role="alert">' . $_COOKIE["errorMessage"] . '</div>';
                }
            ?>

            <button type="submit" class="btn btn-primary">Sign In</button>
        </form>
    </div>
</body>
</html>

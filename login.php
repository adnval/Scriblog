<?php
include("path.php");
include(ROOT_PATH . "/app/controllers/users.php");
guestsOnly();
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <!-- Font Awesome -->
        <script src="https://kit.fontawesome.com/69795959e9.js" crossorigin="anonymous"></script>

        <!-- Google Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Candal&display=swap" rel="stylesheet">
        
        <!-- CSS Styling -->
        <link rel="stylesheet" href="assets/css/style.css">
        <title>Login</title>
    </head>
    <body>
        <?php include(ROOT_PATH . "/app/includes/header.php") ?>

        <div class="auth-content">
            <form action="login.php" method="post">
                <h2 class="form-title">Login</h2>

                <?php include(ROOT_PATH . "/app/helpers/formErrors.php"); ?>

                <div>
                    <label>Username</label>
                    <input type="text" name="username" value="<?php echo $username; ?>" class="text-input">
                </div>
                <div>
                    <label>Password</label>
                    <input type="password" name="password" value="<?php echo $password; ?>" class="text-input">
                </div>
                <div>
                    <button type="submit" name="login-btn" class="btn btn-big">Log In</button>
                </div>
                <p>Or <a href="<?php echo BASE_URL . "/register.php"?>">Sign Up</a></p>
            </form>
        </div>

        <!-- JQuery -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

        <!-- Custom Scripts -->
        <script src="assets/js/scripts.js"></script>
    </body>
</html>
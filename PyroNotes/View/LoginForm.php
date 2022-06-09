<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../CSS/login.css">
    <title>Login</title>
</head>
<body>
    <form class="container" action="../Model/doLogin.php" method="post">
        <h1> Login </h1>
        <input type="email" name="email" required placeholder="Email">
        <input type="password" name="pass" required placeholder="Password">
        <input type="submit" value="Login">
        <div id="noacc">
            <span>No account?</span> <a href="register.php">Register</a>
            <?php
                if(array_key_exists("error", $_REQUEST) && $_REQUEST["error"] == "True"){
                    echo '<br> <br> <span style="color:red">Username or Password are incorrect </span>';
                }
            ?>
        </div>
    </form>
</body>
</html>
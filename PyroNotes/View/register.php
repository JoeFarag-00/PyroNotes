<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="../CSS/register.css">
</head>
<body>
    <form class="container" action="../Model/doRegister.php" method="post">
        <h1> Register </h1>
        <input type="text" required name="uname" placeholder="Full Name">
        <input type="email" required name="email" placeholder="Email Address">
        <input type="password" required name="pass" placeholder="Password">
        <input type="password" required name="cpass" placeholder=" Confirm Password">
        <input type="submit" required value="Register">

        <div id="noacc">
            Have an account? <a href="loginForm.php"> Login</a>
        </div>
        <?php
            if(array_key_exists("error", $_REQUEST)){
                if($_REQUEST["error"] == "True"){
                    echo '<br><br> <span style="color:red">Register was Unsuccessful</span>';
                }
                else if($_REQUEST["error"] == "False"){
                    echo '<br><br> <span style="color:green">Register was Successful</span>';
                }
            }
        ?>
    </form>
</body>
</html>
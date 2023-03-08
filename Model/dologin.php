<?php
require_once "DatabaseFunctions/selectQuery.php";
require_once "DatabaseFunctions/connectToDatabase.php";

print_r($_POST);
if(empty($_POST)){
    echo "You must be registered <br>";
    echo '<a href="../View/register.php">Register</a>';
    exit;
}

// Create connection
$conn = getConnection();
if (!$conn) {

    die("Connection failed: " . $conn->connect_error);
}

$email = $_POST['email'];
$pass = $_POST['pass'];
$pass = md5($pass);

$foundMail = selectQuery($conn, "the_user", "*", "Email",'\''.$email.'\'');
$foundPass = selectQuery($conn, "the_user", "*", "Password",'\''.$pass.'\'');

if($foundMail->num_rows > 0 && $foundPass->num_rows > 0){
    session_start();
    $record = $foundMail->fetch_assoc();
    $_SESSION["id"] = $record["UserID"];

    header("location:../Control/dashboard.php");
}
else{
    header("location:../index.php?error=True");
}
?>


<?php
require_once "DatabaseFunctions/selectQuery.php";
require_once "DatabaseFunctions/connectToDatabase.php";
require_once "DatabaseFunctions/insertQueries.php";

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

$uname = $_POST['uname'];
$email = $_POST['email'];
$pass = $_POST['pass'];
$pass = md5($pass);

$alreadyExists = selectQuery($conn, "the_user", "*", "email",'\''.$email.'\'');

if($alreadyExists->num_rows > 0){
    echo "<br> Email Already Exists <br>";
    header("location:../View/register.php?error=True");
    exit;
}

$qry = insertUser("'{$uname}','{$email}','{$pass}'");
//$qry = "INSERT INTO the_user(Name, Email, Password) VALUES ('{$uname}','{$email}','{$pass}');";

print_r($qry);
echo '<br>';

if(!$qry) {
    echo "There are some problem while inserting data";
    header("location:../View/register.php?error=True");
}
else {
    echo "Data Inserted";
    header("location:../View/register.php?error=False");
}
?>


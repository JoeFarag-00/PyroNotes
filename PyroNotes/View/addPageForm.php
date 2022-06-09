<?php
require_once "../View/header.php";
require_once "../View/logout.php";
require_once "../Model/sayHello.php";
"<br>";
"<br>";
$title = "Add page ";
echo'<h1> Add Page</h1>';
echo '
    <form action="../Model/addPage.php" method="post">
    <label for="pagename">page name:</label><br>
    <input type="text" id="pagename" name="pagename"><br>
    <br>
    <button type="submit">Submit</button>
    </form>
';

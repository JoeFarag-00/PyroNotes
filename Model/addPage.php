<?php
require_once "../View/header.php";
require_once "../View/logout.php";
require_once "../Model/DatabaseFunctions/connectToDatabase.php";
require_once "../Model/DatabaseFunctions/insertQueries.php";
echo "<br>";
echo"page Name: ";
echo ($_REQUEST["pagename"]);
//$GLOBALS["page_name"]=$_POST["pagename"];
echo "<br>";
echo '
    <form action="../Model/addpage.model.php?pagename='.$_REQUEST["pagename"].'" method="post">
    <h1> Enter your content here</h1>
    <textarea id="txtid"  placeholder="put your content here" name="txtname" rows="4" cols="50" maxlength="200"></textarea>
    <br>
    <button type="submit">Submit</button>               
    </form>
';

<?php
session_start();
print_r($_SESSION);
print_r('<br>');
$title = "Dashboard";

//Enter css file name which is inside Styles/
$css="";
//Enter js file name which is inside Scripts/
$js="";
require_once "../View/header.php";
require_once "../Model/sayHello.php";
require_once "../Model/DatabaseFunctions/insertQueries.php";
require_once "../Model/DatabaseFunctions/selectQueries.php";
require_once "../Model/DatabaseFunctions/connectToDatabase.php";

echo '<a class="logout" href="../Model/doLogout.php">Log out</a>';

$conn = getConnection();

$username = sayHello($_SESSION["id"]);
echo '<div class="accountInfo">';
    echo "<h1>Hello {$username} </h1>";

$ujQuery = getUserJournal($_SESSION["id"]);
if(!$ujQuery){
    $userID = $_SESSION["id"];
    require_once "../View/getJournalName.view.php";
    exit;
}

//Get Journal Name And Display it
$journalRecord = getJournal($ujQuery["Journal_ID"]);
    echo '<div class="journalInfo">';
        echo "<h2>{$journalRecord["Journal_Name"]}</h2>";
        echo "<a href=\"updateJournalName.control.php?journalID={$ujQuery["Journal_ID"]}\">Rename Journal</a><br><br>";
    echo '</div>';
echo '</div>';

echo '<a class="addPage" href="../View/addPageForm.php">Add Page</a>';


echo '<div style="border: 1px solid black" class="pages-container">';
    require_once "../Model/getJournalPages.php";
    require_once "../View/showPages.php";
    $pageArray = getJournalPages($journalRecord["Journal_ID"]);
    if(!$pageArray){
        exit;
    }
    showPages($pageArray);
echo '</div>';

require_once "../View/footer.php";
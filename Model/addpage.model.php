<?php
session_start();
require_once "../Model/DatabaseFunctions/insertQueries.php";
require_once "../Model/DatabaseFunctions/selectQueries.php";
require_once "../Model/addPage.php";
$userjournalquery=getUserJournal($_SESSION['id']);

//print_r($_SESSION);
insertPage("'{$_REQUEST["pagename"]}','{$_REQUEST["txtname"]}'"); 
$pagequery=getPage("'{$_REQUEST["pagename"]}'",'PageName');  
print_r($pagequery);
echo("<br>");
print_r($userjournalquery);
insertJournalPage("{$userjournalquery["ID"]},{$pagequery['Page_ID']}");
    



header("location:../Control/dashboard.php");
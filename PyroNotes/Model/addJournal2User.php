<?php
require_once "DatabaseFunctions/insertQueries.php";
require_once "DatabaseFunctions/selectQueries.php";
print_r($_REQUEST["Jname"]);

$_REQUEST["Jname"] = addslashes($_REQUEST["Jname"]);

insertJournal("'{$_REQUEST["Jname"]}'");

$journalRecord = getJournal("'{$_REQUEST["Jname"]}'", 'Journal_Name');

insertUserJournal("{$_REQUEST["userID"]}, {$journalRecord["Journal_ID"]}");

header("location:../Control/dashboard.php");
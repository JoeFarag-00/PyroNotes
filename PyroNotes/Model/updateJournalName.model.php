<?php
require_once "DatabaseFunctions/updateQueries.php";
print_r($_REQUEST["Jname"]);

$_REQUEST["Jname"] = addslashes($_REQUEST["Jname"]);
updateJournal("Journal_Name","'{$_REQUEST["Jname"]}'", "Journal_ID", "{$_REQUEST["journalID"]}");

header("location:../Control/dashboard.php");
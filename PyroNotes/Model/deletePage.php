<?php
require_once "DatabaseFunctions/deleteQueries.php";
deletePage($_REQUEST["pageid"]);
deleteJournalPage($_REQUEST["pageid"], "Page_ID");
header("location:../Control/dashboard.php");
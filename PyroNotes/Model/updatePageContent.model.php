<?php
require_once "../Model/updatePageContent.model.php";
require_once "../Model/DatabaseFunctions/updateQueries.php";
print_r($_REQUEST); 
$pageID = $_REQUEST["pageid"];
$pageContent = $_REQUEST["content"];

updatePage("PageContent","'{$pageContent}'","Page_ID","{$pageID}");
header("location:../Control/dashboard.php");

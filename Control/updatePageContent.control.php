<?php
require_once "../Model/DatabaseFunctions/selectQueries.php";
require_once "../View/updatePageContent.view.php";

$pageRecord = getPage($_GET["pageid"]);
$pageContent = $pageRecord["PageContent"];
$pageID = $pageRecord["Page_ID"];
showEditForm($pageContent, $pageID);
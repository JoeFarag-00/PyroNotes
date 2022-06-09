<?php
require_once "../Model/DatabaseFunctions/selectQueries.php";
require_once "../View/updatePageContent.view.php";

$pageRecord = getPage($_GET["pageid"]);
$pageContent = $pageRecord["PageContent"];
echo '<br>';                 
//print_r($pageRecord);         
echo '<br>';                 
$pageID = $pageRecord["Page_ID"];
showEditForm($pageContent, $pageID);

<?php
require_once "DatabaseFunctions/selectQueries.php";
function sayHello($id){
    $record = getUser($id);
    $uname = $record["Name"];

    return $uname;
}
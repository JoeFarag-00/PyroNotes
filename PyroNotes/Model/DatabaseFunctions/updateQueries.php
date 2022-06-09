<?php
require_once "connectToDatabase.php";
require_once "updateQuery.php";

function updateUser($colName, $colValue, $colCriteria, $criteria){
    $conn = getConnection();
    $qry = updateQuery($conn,'the_user', "{$colName}", $colValue, $colCriteria, $criteria);
    
    return $qry; 
}

function updateJournal($colName, $colValue, $colCriteria, $criteria){
    $conn = getConnection();
    $qry = updateQuery($conn,'journal', "{$colName}", $colValue, $colCriteria, $criteria);
    
    return $qry; 
}

function updateUserJournal($colName, $colValue, $colCriteria, $criteria){
    $conn = getConnection();
    $qry = updateQuery($conn,'userjournal', "{$colName}", $colValue, $colCriteria, $criteria);
    
    return $qry; 
}

function updatePage($colName, $colValue, $colCriteria, $criteria){
    $conn = getConnection();
    $qry = updateQuery($conn,'page', "{$colName}", $colValue, $colCriteria, $criteria);
    
    return $qry; 
}

function updateJournalPage($colName, $colValue, $colCriteria, $criteria){
    $conn = getConnection();
    $qry = updateQuery($conn,'jp', "{$colName}", $colValue, $colCriteria, $criteria);

    return $qry; 
}
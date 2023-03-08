<?php
require_once "connectToDatabase.php";
require_once "insertQuery.php";

function insertUser($values){
    $conn = getConnection();
    $qry = insertQuery($conn,'the_user', 'Name, Email, Password', $values);

    return $qry; 
}

function insertJournal($values){
    $conn = getConnection();
    $qry = insertQuery($conn,'journal', 'Journal_Name', $values);
    
    return $qry; 
}

function insertUserJournal($values){
    $conn = getConnection();
    $qry = insertQuery($conn,'userjournal', 'UserID, Journal_ID', $values);
    
    return $qry; 
}

function insertPage($values){
    $conn = getConnection();
    $qry = insertQuery($conn,'page', 'PageName, PageContent', $values);
    
    return $qry; 
}

function insertJournalPage($values){
    $conn = getConnection();
    $qry = insertQuery($conn,'jp', 'Journal_ID, Page_ID', $values);
    
    return $qry; 
}
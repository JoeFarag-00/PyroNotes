<?php
require_once "connectToDatabase.php";
require_once "deleteQuery.php";

function deleteUser($id, $colName='UserID'){
    $conn = getConnection();
    $qry = deleteQuery($conn,'the_user', "{$colName}", $id);
    return $qry;
}

function deleteJournal($id, $colName='Journal_ID'){
    $conn = getConnection();
    $qry = deleteQuery($conn,'journal', "{$colName}", $id);
    return $qry;
}

function deleteUserJournal($id, $colName='UserID'){
    $conn = getConnection();
    $qry = deleteQuery($conn,'userjournal', "{$colName}", $id);
    return $qry;
}

function deletePage($id,$colName='Page_ID'){
    $conn = getConnection();
    $qry = deleteQuery($conn,'page', "{$colName}", $id);
    return $qry;
}

function deleteJournalPage($id, $colName='Journal_ID'){
    $conn = getConnection();
    $qry = deleteQuery($conn,'jp', "{$colName}", $id);
    return $qry;
}
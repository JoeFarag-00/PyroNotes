<?php
require_once "connectToDatabase.php";
require_once "selectQuery.php";

function getUser($id, $colName='UserID'){
    $conn = getConnection();
    $qry = selectQuery($conn, 'the_user', '*', "{$colName}", $id);
    if(!$qry||$qry->num_rows == 0){
        return False;
    }

    if($qry->num_rows > 1){
        $record2D = array();
        while($row = $qry->fetch_assoc()) {
            array_push($record2D, $row);
        }
        return $record2D; 
    }

    $record = $qry->fetch_assoc();

    if($qry->num_rows == 1){
        return $record;
    }

    //echo '<br>'.$qry->num_rows.'<br>';
}

function getJournal($id, $colName='Journal_ID'){
    $conn = getConnection();
    $qry = selectQuery($conn, 'journal', '*', "{$colName}", $id);
    if(!$qry||$qry->num_rows == 0){
        return False;
    }

    if($qry->num_rows > 1){
        $record2D = array();
        while($row = $qry->fetch_assoc()) {
            array_push($record2D, $row);
        }
        return $record2D; 
    }

    $record = $qry->fetch_assoc();

    if($qry->num_rows == 1){
        return $record;
    }

    //echo '<br>'.$qry->num_rows.'<br>';
}

function getUserJournal($id, $colName='UserID'){
    $conn = getConnection();
    $qry = selectQuery($conn, 'userJournal', '*', "{$colName}", $id);
    if(!$qry||$qry->num_rows == 0){
        return False;
    }

    if($qry->num_rows > 1){
        $record2D = array();
        while($row = $qry->fetch_assoc()) {
            array_push($record2D, $row);
        }
        return $record2D; 
    }

    $record = $qry->fetch_assoc();

    if($qry->num_rows == 1){
        return $record;
    }

    //echo '<br>'.$qry->num_rows.'<br>';
}

function getPage($id,$colName='Page_ID'){
    $conn = getConnection();

    $qry = selectQuery($conn, 'page', '*', "{$colName}", $id);
    if(!$qry||$qry->num_rows == 0){
        return False;
    }

    if($qry->num_rows > 1){
        $record2D = array();
        while($row = $qry->fetch_assoc()) {
            array_push($record2D, $row);
        }
        return $record2D; 
    }

    $record = $qry->fetch_assoc();
    if($qry->num_rows == 1){
        return $record;
    }

    //echo '<br>'.$qry->num_rows.'<br>';
}

function getJournalPage($id, $colName='Journal_ID'){
    $conn = getConnection();
    $qry = selectQuery($conn, 'jp', '*', "{$colName}", $id);
    if(!$qry||$qry->num_rows <= 0){
        return False;
    }

    if($qry->num_rows > 1){
        $record2D = array();
        while($row = $qry->fetch_assoc()) {
            array_push($record2D, $row);
        }
        return $record2D; 
    }

    $record = $qry->fetch_assoc();
    
    if($qry->num_rows == 1){
        return $record;
    }

    //echo '<br>'.$qry->num_rows.'<br>';
}
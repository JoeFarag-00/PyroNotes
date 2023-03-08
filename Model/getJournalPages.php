<?php
require_once "DatabaseFunctions/selectQueries.php";
function getJournalPages($journalID){
    $journalPageRecord = getJournalPage($journalID);
    if(!$journalPageRecord || Count($journalPageRecord) == 0){
        return False;
    }

    //print_r($journalPageRecord);
    
    if(count($journalPageRecord) == count($journalPageRecord, COUNT_RECURSIVE)){
        $pageRecord = getPage($journalPageRecord["Page_ID"]);
        //print_r($pageRecord);
        return $pageRecord;
    }
    else{
        $page2DRecord = array();
        foreach($journalPageRecord as $j){
            $pageRecord = getPage($j["Page_ID"]);
            array_push($page2DRecord, $pageRecord);
        }
        //print_r($page2DRecord);
        return $page2DRecord;
    }

}
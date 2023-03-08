<?php
function selectQuery($conn, $tableName,$selectCols, $criteriaCols, $criteria){
    $qry = "SELECT {$selectCols} FROM {$tableName} WHERE {$criteriaCols} = {$criteria}";
    //echo '<br>'.$qry.'<br>';
    return mysqli_query($conn, $qry);
}
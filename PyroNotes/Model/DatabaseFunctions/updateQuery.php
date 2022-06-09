<?php
function updateQuery($conn, $tableName,$updateCol, $updateVal,  $criteriaCols, $criteria){
    $qry = "UPDATE {$tableName} SET {$updateCol} = {$updateVal} WHERE {$criteriaCols} = {$criteria};";
    echo '<br>'.$qry.'<br>';
    return mysqli_query($conn, $qry);
}
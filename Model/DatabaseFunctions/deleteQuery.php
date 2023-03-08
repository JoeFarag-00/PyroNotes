<?php
function deleteQuery($conn, $tableName, $criteriaCols, $criteria){
    $qry = "DELETE FROM {$tableName} WHERE ${criteriaCols}={$criteria};";
    //echo '<br>'.$qry.'<br>';
    return mysqli_query($conn, $qry);
}
<?php
function insertQuery($conn, $tableName,$cols, $values){
    $qry = "INSERT INTO {$tableName}({$cols}) VALUES ({$values});";
    echo '<br>'.$qry.'<br>';
    return mysqli_query($conn, $qry);
}
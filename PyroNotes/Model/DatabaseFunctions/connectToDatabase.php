<?php
function getConnection(){
    $servername = "localhost";
    $username = "root";
    $password = "";
    $DB = "journal website";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $DB);
    return $conn;
}
<?php
// 
// Audrey Harmon
// Backend Web Development
// October 20, 2023
// 

include "database.php";

// CREATE GAME

    global $db;
    
    $sql = "SELECT * FROM games";
    
    $qry = $db->query($sql);

    $result = $qry->fetchAll();

?>
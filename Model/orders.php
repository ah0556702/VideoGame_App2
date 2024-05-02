<?php
    include "database.php";
    $sql = "SELECT * FROM orders";
    $qry = $db->query($sql);
    $result = $qry->fetchAll();
?>
<?php

    include '../dbConnection.php';
    
    $dbConn = getDatabaseConnection("final_project");
    
    $sql = "DELETE FROM `equipment` WHERE e_id = " . $_GET['e_id'];
    
    $stmt = $dbConn->prepare($sql);
    $stmt->execute();
    
    header("Location: admin.php");

?>
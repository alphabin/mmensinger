<?php

    include "../../dbConnection.php";
    
    $dbConn = getDatabaseConnection('final_project');
    
    $productId = $_GET['id'];
    
    $sql = "SELECT e_type, COUNT(e_id) total 
            FROM `equipment` 
            WHERE 1 
            GROUP BY e_type
            ";
    
    $stmt = $dbConn->prepare($sql);
    $stmt->execute(array(":productId" => $productId));
    $record = $stmt->fetchAll(PDO::FETCH_ASSOC);
    
    echo json_encode($record);

?>
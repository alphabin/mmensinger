<?php

    include "../../dbConnection.php";
    
    $dbConn = getDatabaseConnection('final_project');
    
    $productId = $_GET['id'];
    
    $sql = "SELECT COUNT(e_id) as total
            FROM equipment
            ";
    
    $stmt = $dbConn->prepare($sql);
    $stmt->execute(array(":productId" => $productId));
    $record = $stmt->fetch(PDO::FETCH_ASSOC);
    
    echo json_encode($record);

?>
<?php

    include "../../dbConnection.php";
    
    $dbConn = getDatabaseConnection('final_project');
    
    $productId = $_GET['id'];
    
    $sql = "SELECT *
            FROM equipment
            WHERE id = :productId";
    
    $stmt = $dbConn->prepare($sql);
    $stmt->execute(array(":productId" => $productId));
    $record = $stmt->fetch(PDO::FETCH_ASSOC);
    
    echo json_encode($record);

?>
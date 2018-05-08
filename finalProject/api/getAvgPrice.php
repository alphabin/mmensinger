<?php

    include "../../dbConnection.php";
    
    $dbConn = getDatabaseConnection('final_project');
    
    $productId = $_GET['id'];
    
    $sql = "SELECT ROUND(AVG(e_price),2) as average
            FROM equipment
            ";
    
    $stmt = $dbConn->prepare($sql);
    $stmt->execute(array(":productId" => $productId));
    $record = $stmt->fetch(PDO::FETCH_ASSOC);
    
    echo json_encode($record);

?>
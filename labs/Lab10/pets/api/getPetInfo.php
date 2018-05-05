<?php

    include "../../../../dbConnection.php";
    
    $dbConn = getDatabaseConnection('pets');
    
    $petId = $_GET['id'];
    
    $sql = "SELECT *, YEAR(CURDATE()) - yob age
            FROM pets
            WHERE id = :petId";
    
    $stmt = $dbConn->prepare($sql);
    $stmt->execute(array(":petId" => $petId));
    $record = $stmt->fetch(PDO::FETCH_ASSOC);
    
    echo json_encode($record);

?>
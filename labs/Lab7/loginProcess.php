<?php
    
    session_start();
    
    //print_r($_POST); //displays values passed in the form


    include '../../dbConnection.php';
    
    $conn = getDatabaseConnection("ottermart");
    
    $username = $_POST['username'];
    $password = sha1($_POST['password']);
    
    //The following sql does not prevent SQL injection
    $sql = "SELECT *
            FROM om_admin
            WHERE username = '$username'
            AND password = '$password'";
    
    //The following sql prevents sql injection by avoiding using single quotes
    $sql = "SELECT *
            FROM om_admin
            WHERE username = :username
            AND password = :password";
    
    $np = array();
    $np[":username"] = $username;
    $np[":password"] = $password;
            
    $stmt = $conn->prepare($sql);
    $stmt->execute($np);
    $record = $stmt->fetch(PDO::FETCH_ASSOC);  //expecting one single record
    
    //print_r($record);
    
    if(empty($record)) {
        
        $_SESSION['errMessage'] = "Wrong username or password!";
        header("Location:index.php");
    }
    else {
        
        //echo $record['firstName'] . " " . $record['lastName'];
        $_SESSION['adminName'] = $record['firstName'] . " " . $record['lastName'];
        header("Location:admin.php");
    }
    
?>
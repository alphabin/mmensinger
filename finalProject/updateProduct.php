<?php
    
    include '../dbConnection.php';
    
    $dbConn = getDatabaseConnection("final_project");
    
    function getProductInfo () {
        
        global $dbConn;
        
        $sql = "SELECT * 
                FROM equipment
                WHERE e_id = " . $_GET['e_id'] . "";
            
        $stmt = $dbConn->prepare($sql);
        $stmt->execute();
        $record = $stmt->fetch(PDO::FETCH_ASSOC);
        
        return $record;
        
    }
    
    
    function getCategories($catId) {
    global $dbConn;
    
    $sql = "SELECT * FROM type ";
    
    $statement = $dbConn->prepare($sql);
    $statement->execute();
    $records = $statement->fetchAll(PDO::FETCH_ASSOC);
    foreach ($records as $record) {
        echo "<option ";
        echo ($record["t_name"] == $catId)? "selected": "";
        echo " value='".$record["t_name"] ."'>". $record['t_name'] ." </option>";
        
    }

}
    
    if(isset($_GET['e_id'])) {
            
        $product = getProductInfo();
    }
    
    if(isset($_GET['updateProduct'])) {
        
        $sql = "UPDATE equipment 
                SET e_name = :e_name,
                e_brand = :e_brand,
                e_image = :e_image,
                e_price = :e_price,
                e_type = :e_type,
                e_buyNow = :e_buyNow
                WHERE e_id = :e_id";
                
        $np = array();
        $np[":e_name"] = $_GET['e_name'];
        $np[":e_brand"] = $_GET['e_brand'];
        $np[":e_type"] = $_GET['e_type'];
        $np[":e_price"] = $_GET['e_price'];
        $np[":e_image"] = $_GET['e_image'];
        $np[":e_id"] = $_GET['e_id'];
        $np[":e_buyNow"] = $_GET['e_buyNow'];
        
        $statement = $dbConn->prepare($sql);
        $statement->execute($np);
    
        header("Location: admin.php");
    }
    
    
    
?>

<!DOCTYPE html>
<html>
    <head>
        <title> Update Product </title>
        <style>
            @import url("css/style.css");
        </style>
    </head>
    <body>
        
        <h1> Update Product</h1>
        <form>
            <input type="hidden" name="e_id" value="<?=$product['e_id']?>"/>
            Product name: <input type="text" value= <?=$product['e_name']?> name="e_name"><br><br/>
            Product brand: <input type="text" value= <?=$product['e_brand']?> name="e_brand"><br><br/>
            Category: <select name="e_type">
                <option value="">Select One</option>
                <?php getCategories($product['e_type']); ?>
            </select> <br /><br/>
            Price: <input type="text" value= <?=$product['e_price']?> name="e_price"><br><br/>
            Set Image Url: <input type = "text" value= <?=$product['e_image']?> name = "e_image"><br><br/>
            Buy Now Url: <input type = "text" value= <?=$product['e_buyNow']?> name = "e_buyNow"><br><br/>
            <input type="submit" name="updateProduct" value="Update Product">
            
        </form>
    </body>
</html>
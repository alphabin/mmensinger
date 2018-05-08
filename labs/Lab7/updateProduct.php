<?php
    
    include '../../dbConnection.php';
    
    $dbConn = getDatabaseConnection("ottermart");
    
    function getProductInfo () {
        
        global $dbConn;
        
        $sql = "SELECT * 
                FROM om_product
                WHERE productId = " . $_GET['productId'] . "";
            
        $stmt = $dbConn->prepare($sql);
        $stmt->execute();
        $record = $stmt->fetch(PDO::FETCH_ASSOC);
        
        return $record;
        
    }
    
    function getCategories($catId) {
    global $dbConn;
    
    $sql = "SELECT catId, catName from om_category ORDER BY catName";
    
    $statement = $dbConn->prepare($sql);
    $statement->execute();
    $records = $statement->fetchAll(PDO::FETCH_ASSOC);
    foreach ($records as $record) {
        echo "<option ";
        echo ($record["catId"] == $catId)? "selected": "";
        echo " value='".$record["catId"] ."'>". $record['catName'] ." </option>";
        
    }
}
    
    if(isset($_GET['productId'])) {
            
        $product = getProductInfo();
    }
    
    if(isset($_GET['updateProduct'])) {
        
        $sql = "UPDATE om_product 
                SET productName = :productName,
                productDescription = :productDescription,
                productImage = :productImage,
                price = :price,
                catId = :catId
                WHERE productId = :productId";
                
        $np = array();
        $np[":productName"] = $_GET['productName'];
        $np[":productDescription"] = $_GET['description'];
        $np[":productImage"] = $_GET['productImage'];
        $np[":price"] = $_GET['price'];
        $np[":catId"] = $_GET['catId'];
        $np[":productId"] = $_GET['productId'];
        
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
            <input type="hidden" name="productId" value="<?=$product['productId']?>"/>
            Product name: <input type="text" value= <?=$product['productName']?> name="productName"><br><br/>
            Description: <textarea name="description" cols = 50 rows = 4> <?=$product['productDescription']?> </textarea><br><br/>
            Price: <input type="text" value= <?=$product['price']?> name="price"><br><br/>
            Category: <select name="catId">
                <option value="">Select One</option>
                <?php getCategories($product['catId']); ?>
            </select> <br /><br/>
            Set Image Url: <input type = "text" value= <?=$product['productImage']?> name = "productImage"><br><br/>
            <input type="submit" name="updateProduct" value="Update Product">
            
        </form>
    </body>
</html>
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
            @import url("css/styles.css");
        </style>
        
        	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>   
        <style>
            body {
                text-align: center;
            }
        </style>
    </head>
    <body>
        
        <!--Add main menu here -->
        <nav class="navbar navbar-expand-lg navbar-dark" style="background-color: green;">
          <a class="navbar-brand" style="color: white">GolfLand</a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
              <li class="nav-item active">
                <a class="nav-link" href="admin.php">Admin Page <span class="sr-only">(current)</span></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="addProduct.php">Add Product</a>
              </li>
              <li class="nav-item">
                  <a class="nav-link" href="logout.php">Logout</a>
              </li>
              
            </ul>
          </div>
        </nav>

        <div id="homeTxt">
            
            <h1> Update Product</h1>
        <form>
            <input type="hidden" name="e_id" value="<?=$product['e_id']?>"/>
            <strong>Product name:</strong> <input type="text" value= <?=$product['e_name']?> name="e_name"><br><br/>
            <strong>Product brand:</strong> <input type="text" value= <?=$product['e_brand']?> name="e_brand"><br><br/>
            <strong>Category:</strong> <select name="e_type">
                <option value="">Select One</option>
                <?php getCategories($product['e_type']); ?>
            </select> <br /><br/>
            <strong>Price:</strong> <input type="text" value= <?=$product['e_price']?> name="e_price"><br><br/>
            <strong>Set Image Url:</strong> <input type = "text" value= <?=$product['e_image']?> name = "e_image"><br><br/>
            <strong>Buy Now Url:</strong> <input type = "text" value= <?=$product['e_buyNow']?> name = "e_buyNow"><br><br/>
            <input type="submit" class="btn btn-warning" name="updateProduct" value="Update Product">
            
        </form>
        <br>
        </div>
        
    </body>
    
    <footer>
            <hr>
            CST 336 Internet Programming. 2018&copy; Mensinger <br />
            <strong>Disclaimer:</strong> The information in this webpage is fictitous. <br />
            It is used for academic purposes only.
             <figure id="csumb">
                <img src="img/csumb_logo.jpg" alt="California State University Monterey Bay logo" />
            </figure>
        </footer>
</html>
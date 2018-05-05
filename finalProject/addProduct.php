<?php
session_start();

if(!isset( $_SESSION['adminName']))
{
  header("Location:index.php");
}

include "../dbConnection.php";
$conn = getDatabaseConnection("final_project");

function getCategories() {
    global $conn;
    
    $sql = "SELECT t_name, t_id from type ";
    
    $statement = $conn->prepare($sql);
    $statement->execute();
    $records = $statement->fetchAll(PDO::FETCH_ASSOC);
    foreach ($records as $record) {
        echo "<option value='".$record["t_name"] ."'>". $record['t_name'] ." </option>";
    }
}

if (isset($_GET['submitProduct'])) {
    $productName = $_GET['productName'];
    $productBrand = $_GET['productBrand'];
    $productImage = $_GET['productImage'];
    $productType = $_GET['productType'];
    $productPrice = $_GET['productPrice'];
    $productUrl = $_GET['productUrl'];
    
    $sql = "INSERT INTO `equipment`( `e_name`, `e_brand`, `e_type`, `e_price`, `e_image`, `e_buyNow`) 
            VALUES (:productName,:productBrand,:productType,:productPrice,:productImage,:productUrl)";
    
    $namedParameters = array();
    $namedParameters[':productName'] = $productName;
    $namedParameters[':productBrand'] = $productBrand;
    $namedParameters[':productType'] = $productType;
    $namedParameters[':productPrice'] = $productPrice;
    $namedParameters[':productImage'] = $productImage;
    $namedParameters[':productUrl'] = $productUrl;
    
    $statement = $conn->prepare($sql);
    $statement->execute($namedParameters);
    header("Location: admin.php");
}

?>
<!DOCTYPE html>
<html>
    <head>
        <title> Add Product </title>
        <style>
            @import url("css/style.css");
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
          <a class="navbar-brand">GolfLand</a>
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
        
        <h1> Add Product</h1>
        <form>
            Product name: <input type="text" name="productName"><br>
            Product brand: <input type="text" name="productBrand"><br>
            Product type: <select name="productType">
                <option value="">Select One</option>
                <?php getCategories(); ?>
            </select> <br />
            Price: <input type="text" name="productPrice"><br>
            
            Set Image Url: <input type = "text" name = "productImage"><br>
            
            Buy Now Url: <input type = "text" name = "productUrl"><br>
            <input type="submit" name="submitProduct" value="Add Product">
            
        </form>
    </body>
</html>
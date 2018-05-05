<?php
    
    
    
    include '../dbConnection.php';
    
    function getCategories() {
    
    $dbConn = getDatabaseConnection('final_project');
    
    $sql = "SELECT t_name, t_id from type ";
    
    $statement = $dbConn->prepare($sql);
    $statement->execute();
    $records = $statement->fetchAll(PDO::FETCH_ASSOC);
    foreach ($records as $record) {
        echo "<option value='".$record["t_name"] ."'>". $record['t_name'] ." </option>";
    }
}
    
    
    function getAllEquipment($sql) {
        
        global $namedParameters;
        
        $dbConn = getDatabaseConnection('final_project');
        
        $stmt = $dbConn->prepare($sql);
        $stmt->execute($namedParameters);
        $records = $stmt->fetchAll(PDO::FETCH_ASSOC);
        
        return $records;
    }
?>

<!DOCTYPE html>
<html>
    <head>
        <title> </title>
        <meta charset="utf-8"/>
        <style>
            @import url(css/styles.css);
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
                <a class="nav-link" href="index.php">Home </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="equipment.php">Equipment <span class="sr-only">(current)</span></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="loginPage.php">Log In</a>
              </li>
            </ul>
          </div>
        </nav>
            
            <h1> Equipment </h1>
            
                <h3>Search by:</h3>
                
                <form >
                    <strong>Product Name: </strong><input type="text" name="e_name" placeholder="Enter product name" /><br/><br/>
                    
                    <strong>Product Brand: </strong><input type="text" name="e_brand" placeholder="Enter product brand" /><br/><br/>
                    
                    <select id="dropdown" name="filter">
                        <option value="">Filter by...</option>
                        <option value="e_brand">Brand</option>
                        <option value="e_type">Type</option>
                        <option value="e_price">Price</option>
                    </select>
                    <br/><br/>
                    
                    <strong>Product Type:</strong> <select id="dropdown" name="e_type">
                        <option value="">Select One</option>
                        <?php getCategories(); ?>
                    </select>
                    <br/><br/>
                    
                    <input type="radio" name="order" value=" ASC"><strong>Asc</strong>
                    <input type="radio" name="order" value=" DESC"><strong>Desc</strong>
                    <br/><br/>
                    
                    <input type="submit" value="Search" name="submit"><br><br>
                </form>
                
                <?php
                    
                      $sql = "SELECT * FROM equipment WHERE 1";
                    
                    if(isset($_GET['submit'])){
                        
                        if (!empty($_GET['e_name'])) 
                        { 
                            $sql .=  " AND e_name LIKE :productName";
                            $namedParameters[":productName"] = "%" . $_GET['e_name'] . "%";
                        }
                        
                        if(!empty($_GET['e_brand'])) {
                            
                            $sql .= " AND e_brand LIKE :productBrand";
                            $namedParameters[":productBrand"] = "%" . $_GET['e_brand'] . "%";
                        }
                        
                        if(!empty($_GET['e_type'])) {
                            
                            $sql .= " AND e_type = :productType";
                            $namedParameters[":productType"] =  $_GET['e_type'];
                        }
                        
                        if(!empty($_GET['filter']))
                        {
                            $sql .= " ORDER BY " . $_GET['filter'];
                        }
                        if(empty($_GET['filter'])) {
                            $sql .= " ORDER BY e_name";
                        }
                        
                        if(isset($_GET['order']))
                        {
                            $sql .= " " . $_GET['order'];
                        }
                    }
                    else{
                        $sql .= " ORDER BY e_name";
                    }
                    
                    
                    $equipment = getAllEquipment($sql);
                    
                    foreach($equipment as $item) {
                        
                        
                        echo "<div class='card text-white bg-success' style='width: 25rem;'>";
                        echo "<img class='card-img-top' src='" . $item['e_image'] . "' alt='Card image cap'>";
                        echo "<div class='card-body style=background-color:green'>";
                        echo "<h4 class='card-title'>" . $item['e_brand'] . " " . $item['e_name'] . "</h4>";
                        echo "<p class='card-text'>Type: " . $item['e_type'] . "</p>";
                        echo "<p class='card-text'>Price: $" . $item['e_price'] . "</p>";
                        echo "<a href='" . $item['e_buyNow'] . "' class='btn btn-primary'>Buy Now</a>";
                        echo "</div>";
                        
                        
                    }
                    
                
                ?>
                
                
                
                



    </body>
</html>
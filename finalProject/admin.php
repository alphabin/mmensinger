<?php

session_start();

if(!isset( $_SESSION['adminName']))
{
  header("Location:index.php");
}

include '../dbConnection.php';
$conn = getDatabaseConnection("final_project");

function displayAllProducts(){
    global $conn;
    $sql="SELECT * FROM equipment";
    $statement = $conn->prepare($sql);
    $statement->execute();
    $records = $statement->fetchAll(PDO::FETCH_ASSOC);

    return $records;
}
?>

<!DOCTYPE html>
<html>
    <head>
        <title> Admin Main Page </title>
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
        
        <script>
            
            function confirmDelete() {
                
                return confirm("Are you sure you want to delete this product?");
            }
            
        </script>
        
        <script>
            
            $(document).ready(function() {
                
                $("#countProducts").click(function() {
                    
                    $.ajax({
                        
                        type: "GET",
                        url: "api/getProductCount.php",
                        data: {},
                        success: function(data){
                            
                            alert("Total count of products: " + JSON.parse(data).total);
                        }
                        
                    });//ajax
                    
                    
                    
                }); //click count
                
                $("#avgPrice").click(function() {
                    
                    $.ajax({
                        
                        type: "GET",
                        url: "api/getAvgPrice.php",
                        data: {},
                        success: function(data){
                            
                            alert("Average price of products: $" + JSON.parse(data).average);
                        }

                        
                    });//ajax
                    
                }); //click average
                
                $("#type").click(function() {
                    
                    $.ajax({
                        
                        type: "GET",
                        url: "api/getTotalType.php",
                        data: {},
                        success: function(data){
                            
                            
                            
                            alert("Type         " + "Total \n" +
                                JSON.parse(data)[0].e_type + "          " + JSON.parse(data)[0].total + "\n" + 
                                JSON.parse(data)[1].e_type + "            " + JSON.parse(data)[1].total + "\n" +
                                JSON.parse(data)[2].e_type + "          " + JSON.parse(data)[2].total + "\n" +
                                JSON.parse(data)[3].e_type + "       " + JSON.parse(data)[3].total + "\n");
                                
                        }

                        
                    });//ajax
                    
                }); //click total by type
                
            }); //document ready
        
        </script>
    
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
            
            <h1> Admin Main Page </h1>
        
        <br />
        
        <h3> Welcome <?=$_SESSION['adminName']?>! </h3>
        
        <br />
        
        <button id="countProducts">
            Product Count
        </button>
        <button id="avgPrice">
            Average Price
        </button>
       
        <button id="type">
            Total Products by Type
        </button>
        
        <br><br>
        
        <strong> Products: </strong> <br><br />
        
        <div id="products">
            <?php $records=displayAllProducts();
            foreach($records as $record) {
                
                echo "<form  id='admin' action='updateProduct.php' >";
                echo "<input type='hidden' name='e_id' value= " . $record['e_id'] . " />";
                echo "<input id='updateButton' type='submit' value='Update' class='btn btn-warning'>";
                echo "</form> &nbsp";
                
                echo "&nbsp";
                
                echo "<form id='admin' action='deleteProduct.php' onsubmit='return confirmDelete()'>";
                echo "<input type='hidden' name='e_id' value= " . $record['e_id'] . " />";
                echo "<input  id='removeButton' type='submit' value='Remove' class='btn btn-danger'>";
                echo "</form> &nbsp";
                
                echo "<strong> " . $record['e_brand'] . " " . $record['e_name'] . " " . $record['e_type'] . "</strong>";
                echo '<br><br>';
                
                
               
            }
        
        ?>
        </div>
        
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
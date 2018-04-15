<?php

session_start();
if(!isset( $_SESSION['adminName']))
{
  header("Location:index.php");
}
include '../../dbConnection.php';
$conn = getDatabaseConnection("ottermart");

function displayAllProducts(){
    global $conn;
    $sql="SELECT * FROM om_product";
    $statement = $conn->prepare($sql);
    $statement->execute();
    $records = $statement->fetchAll(PDO::FETCH_ASSOC);
    
    //print_r($records);

    return $records;
}
?>

<!DOCTYPE html>
<html>
    <head>
        <title> Admin Main Page </title>
        <style>
            @import url("css/style.css");
        </style>
        
        <script>
            
            function confirmDelete() {
                
                return confirm("Are you sure you want to delete it?");
            }
            
        </script>
    </head>
    <body>


        
        <h1> Admin Main Page </h1>
        
        <h3> Welcome <?=$_SESSION['adminName']?>! </h3>
        
        <br />
        <form action="addProduct.php">
            <input id="addButton" type="submit" name="addproduct" value="Add Product"/>
        </form>
        
         <form action="logout.php">
            <input type="submit"  value="Logout"/>
        </form>
        
        <br /><br />
        <strong> Products: </strong> <br />
        
        <div id="products">
            <?php $records=displayAllProducts();
            foreach($records as $record) {
                
                echo "<form  action='updateProduct.php' >";
                echo "<input type='hidden' name='productId' value= " . $record['productId'] . " />";
                echo "<input id='updateButton' type='submit' value='Update'>";
                echo "</form> &nbsp";
                
                echo "<form action='deleteProduct.php' onsubmit='return confirmDelete()'>";
                echo "<input type='hidden' name='productId' value= " . $record['productId'] . " />";
                echo "<input  id='removeButton' type='submit' value='Remove'>";
                echo "</form> &nbsp";
                
                echo $record['productName'];
                echo '<br>';
            }
        
        ?>
        </div>
        
        
        

    </body>
</html>
<?php
        
    include 'inc/functions.php';
           
?>


<!DOCTYPE html>
<html>
    <head>
        <title> Lab 2: 777 Slot Machine </title>
        <meta charset="utf-8" />
        <style>
            @import url("css/styles.css");
        </style>
    </head>
    <body>
        <div id="main" >
            
            <?php
                play();
            ?>
        
            <form>
                <input type="submit" value="Spin!" />
            </form>
            
        </div>
       


    </body>
    <br> <br> <br>
    <footer>
        CST 336 Internet Programming. 2018&copy; Mensinger <br />
            <strong>Disclaimer:</strong> The information in this webpage is fictitous. <br />
            It is used for academic purposes only.
             <figure id="csumb">
                <img src="img/csumb_logo.jpg" alt="California State University Monterey Bay logo" />
            </figure>
    </footer>
</html>
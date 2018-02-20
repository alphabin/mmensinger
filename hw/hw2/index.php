<?php
    
    include 'functions.php';
    
?>

<!DOCTYPE html>
<html>
    <head>
        <title> Homework 2: Golf Round Generator </title>
        <meta charset="utf-8" />
        <style>
            @import url(css/styles.css);
        </style>
    </head>
        
       <header id="Title">
           <h1> Golf Round Generator </h1>
       </header>

    <body>
        
        <div id="main">

            <?php
                createScores();
            ?>
            
            <form>
                <input type="submit" value="Play Again" />
            </form>
        </div>


    </body>
    </br> </br>
    <footer>
        CST 336 Internet Programming. 2018&copy; Mensinger <br />
            <strong>Disclaimer:</strong> The information in this webpage is fictitous. <br />
            It is used for academic purposes only.
             <figure id="csumb">
                <img src="img/csumb_logo.jpg" alt="California State University Monterey Bay logo" /> 
            </figure>
    </footer>
</html>
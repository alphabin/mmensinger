
<!DOCTYPE html>
<html>
    <head>
        <title> Admin Login </title>
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
                <a class="nav-link" href="index.php">Home </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="equipment.php">Equipment</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="loginPage.php">Log In <span class="sr-only">(current)</span></a>
              </li>
            </ul>
          </div>
        </nav>
        
        <div id="homeTxt">
          
          <h1> GolfLand - Admin Login</h1>
        
         <?php
                
                if(!empty($_SESSION['errMessage'])) {
                    
                    echo $_SESSION['errMessage'];
                }
            ?>
        <form method="POST" action="loginProcess.php">
            
            Username: <input type="text" name="username"/> <br /><br />
            Password: <input type="password" name="password"/> <br /><br />
            
            <input type="submit" name="submitForm" value="Login"/>
            
        </form>
        </div>
        
        
       
    </body>
    
    <br><br><br>
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
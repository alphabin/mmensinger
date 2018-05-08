

<!DOCTYPE html>
<html>
    <head>
        <title> GolfLand </title>
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
                <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="equipment.php">Equipment</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="loginPage.php">Log In</a>
              </li>
            </ul>
          </div>
        </nav>
   
       <div id="homeTxt">
         
         <h1><img id="flag" src="https://d1nhio0ox7pgb.cloudfront.net/_img/g_collection_png/standard/256x256/golf_flag.png"> GolfLand <img id="flag" src="https://d1nhio0ox7pgb.cloudfront.net/_img/g_collection_png/standard/256x256/golf_flag.png"></h1><br><br>
        
        <p>Welcome to GolfLand!</p>
        <p>Here you are able to lookup the latest golf equipment from the top brands and find the right clubs for you.</p>
        <p>If you click the Buy Now button located underneath each product, you are able to purchase that item from a local golf retailer .</p>
        <p>Enjoy!</p><br>
        
        
        <form action='equipment.php' >
            <input type='submit' value='Shop Now!' class='btn btn-warning'>
        </form>
        
        <br><br>
       </div>
        
        <br><br><br>
        
        
        
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

<!DOCTYPE html>
<html>
    <head>
        <title> Admin Login </title>
        <style>
            @import url("css/style.css");
        </style>
    </head>
    <body>

        <h1> OtterMart - Admin Login</h1>
        
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
        
       
    </body>
</html>
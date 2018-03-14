<?php
    
    include 'functions.php';
?>

<!DOCTYPE html>
<html>
    <head>
        <title> Golf Course Quiz </title>
        <meta charset="utf-8" />
        <link href="css/styles.css" rel="stylesheet" type="text/css" />
    </head>
    
        <h1> Golf Course Quiz </h1>
    <body>
        
        <h3> This quiz will be able to offer a recommedation as to where to play your next round of golf based on the information that is given below.</h3>
        
        <br/> <br/>
        
        <div id="Results">
            
            <?php
                if($_GET['userName'] != "" && $_GET['handicap'] != "" && !empty($_GET['condition']) && $_GET['courseType'] != "") {
                    
                    displayCourse($_GET['condition'], $_GET['userName']);
                 }
                
            ?>
        </div>
        
        <form>
            <div id="Questions">
            
                <div id="Error">
                     <?php
                    
                        if(isset($_GET['userName']) && $_GET['userName'] == "") {
                            
                            echo "*Missing Information";
                        }
                    ?><br/>
                </div>
               
                
                <fieldset id="Question1">
                    <legend>1. What is your name?</legend>
                    <input type="text" name="userName" placeholder="Name" value="<?=$_GET['userName']?>" />
                </fieldset><br/>
                
                <div id="Error">
                     <?php
                    
                        if(isset($_GET['handicap']) == "" && isset($_GET['userName'])) {
                            
                            echo "*Missing Information";
                        }
                    ?><br/>
                </div>
                
                <fieldset id="Question2">
                    <legend>2. What is your handicap index? </legend>
                    <input id="1-6" type="radio" name="handicap" value="1-6" <?=checkHandicap('1-6')?>>
                    <label for="1-6">1-6</label><br>
                    <input id="7-13" type="radio" name="handicap" value="7-13" <?=checkHandicap('7-13')?>>
                    <label for="7-13">7-13</label><br>
                    <input id="14-20+" type="radio" name="handicap" value="14-20+" <?=checkHandicap('14-20+')?>>
                    <label for="14-20+">14-20+</label><br>
                </fieldset><br/>
                 
                 <div id="Error">
                     <?php
                    
                        if($_GET['condition'] == "" && isset($_GET['userName'])) {
                            
                            echo "*Missing Information";
                        }
                    ?><br/>
                </div>
                
                <fieldset id="Question3">
                    <legend>3. What weather conditions do you like to play in? (Select all that apply)</legend>
                    <select name="condition">
                        <option value="" > Select One </option>
                        <option  <?=checkCondition('Sunny')?>>  Sunny </option>
                        <option  <?=checkCondition('Windy')?>>  Windy </option>
                        <option  <?=checkCondition('Rainy')?>>  Rainy </option>
                        <option  <?=checkCondition('Foggy')?>>  Foggy </option>
                        
                    </select>
                </fieldset><br/>
                
                <div id="Error">
                     <?php
                    
                        if(isset($_GET['courseType']) == "" && isset($_GET['userName'])) {
                            
                            echo "*Missing Information";
                        }
                    ?><br/>
                </div>
                
                <fieldset id="Question4">
                    <legend>4. What kind of golf course do you prefer? </legend>
                    <input id="Well-known Courses" type="radio" name="courseType" value="Well-known Courses" <?=checkCourseType('Well-known Courses')?>>
                    <label for="Well-known Courses">Well-known Courses</label><br>
                    <input id="Moderately-known Courses" type="radio" name="courseType" value="Moderately-known Courses" <?=checkCourseType('Moderately-known Courses')?>>
                    <label for="Moderately-known Courses">Moderately-known Courses</label><br>
                    <input id="Lesser-known Courses" type="radio" name="courseType" value="Lesser-known Courses" <?=checkCourseType('Lesser-known Courses')?>>
                    <label for="Lesser-known Courses">Lesser-known Courses</label><br>
                </fieldset><br/>
            </div>
           
            <div id="Buttons">
                
                
                <input type="submit" value="Submit Information" name="submitButton" />
                
                
            </div>
            
        </form>
        
        
    </body>
    
    
    <footer>
        
         CST 336 Internet Programming. 2018&copy; Mensinger <br />
            <strong>Disclaimer:</strong> The information in this webpage is fictitous. <br />
            It is used for academic purposes only.
             <figure id="csumb">
                <img src="img/csumb_logo.jpg" alt="California State University Monterey Bay logo" /> 
    </footer>
    
</html>
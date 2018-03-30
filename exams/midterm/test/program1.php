<?php

    function getCalenderSize($month) {
        
       if($month == "November") {
           
           $days = 30;
       }
       if($month == "December" || $month == "January") {
           
           $days = 31;
       }
       
       if($month == "February") {
           
           $days = 28;
       }
       
       return $days;
    }
    
    function getCalender() {
        
        
        echo "<h2>" . $_GET['Month'] . " Itinerary </h2><br/><br/>";
        echo "<table border='1' style='margin: auto 0' cellpadding=50>";
        $index = 1;
        
        $calenderSize = getCalenderSize($_GET['Month']);
        
        if($calenderSize == 28) {
            
            $weeks = 4;
        }
        else {
            
            $weeks = 5;
        }
        
        for($rows = 0; $rows < $weeks; $rows++) {
            
            echo "<tr>";
            
            if($index > $calenderSize) {
                
                break;
            }
            else {
                
                for($cols = 0; $cols < 7; $cols++) {
                
                echo "<td> $index </td>";
              
                $index++;
            }
            }
        }
    }

?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title> Midterm - Program 1: Winter Vacation Planner </title>
    </head>
    
    <style>
        
        body {
            
            margin: 0 auto;
            text-align: center;
        }
        
        #Title {
            
            font-size: 1.5em;
            background-color: grey;
        }
        
        #Error {
            
            color: red;
        }
    </style>
    <body>
        
        <div id="Title">
            
            <h1> Winter Vaction Planner! </h1>
            
        </div>
        
         <form>
                
            Select Month:
            <select name="Month">
                <option value=""> Select </option>
                <option value="November"> November </option>
                <option value="December"> December </option>
                <option value="January"> January </option>
                <option value="February"> February </option>
            </select>
            
            
            <br/><br/>
            
            Number of Locations: 
            <input type="radio" name="locations" value=3 id="Three"/>
            <label for="Three"> Three </label>
            <input type="radio" name="locations" value=4 id="Four"/>
            <label for="Four"> Four </label>
            <input type="radio" name="locations" value=5 id="Five"/>
            <label for="Five"> Five </label>
            
            <br/><br/>
            
            Select Country:
            <select name="Country">
                <option value="USA"> USA </option>
                <option value="Mexico"> Mexico </option>
                <option value="France"> France </option>
            </select>
            
            <br/><br/>
            
          
            Visit locations in alphabetical order: 
            <input type="radio" name="alphabetical" value="A-Z" id="A-Z"/>
            <label for="A-Z"> A-Z </label>
            <input type="radio" name="alphabetical" value="Z-A" id="Z-A"/>
            <label for="Z-A"> Z-A </label>
            
            <br/><br/>
            
            <input type="submit" value="Create Itinerary"/>

        </form>
        
        
        
        <?php
            
             
                
            if(isset($_GET['Month']) != "" && isset($_GET['locations']) != "") {
                
                getCalender();
                
            }
        ?>

        <br/><br/>
        
    <table border="1" width="600">
    <tbody><tr><th>#</th><th>Task Description</th><th>Points</th></tr>
    <tr style="background-color:#99E999">
      <td>1</td>
      <td>The page includes the form elements as the Program Sample: dropdown menu, radio buttons, etc.</td>
      <td width="20" align="center">5</td>
    </tr>
    <tr style="background-color:#FFC0C0">
      <td>2</td>
      <td>Errors are displayed if month or number of locations are not submitted.</td>
      <td width="20" align="center">5</td>
    </tr> 
    <tr style="background-color:#FFC0C0">
      <td>3</td>
      <td>Header and Subheader are displayed with info submitted. </td>
      <td align="center">5</td>
    </tr>    
	<tr style="background-color:#99E999">
      <td>4</td>
      <td>A table with days and weeks is displayed when submitting the form</td>
      <td align="center">5</td>
    </tr> 
    <tr style="background-color:#FFC0C0">
      <td>5</td>
      <td>The number of days in the table correspond to the month selected</td>
      <td align="center">10</td>
    </tr>
    <tr style="background-color:#FFC0C0">
      <td>6</td>
      <td>Random images are displayed in random days</td>
      <td align="center">5</td>
    </tr>       
    <tr style="background-color:#FFC0C0">
      <td>7</td>
      <td>The number of random images correspond to the number of locations and country submitted</td>
      <td align="center">10</td>
    </tr>  
    <tr style="background-color:#FFC0C0">
      <td>8</td>
      <td>The proper name of the location is displayed below the image 
      		(e.g. "New York", "Las Vegas")</td>
      <td align="center">10</td>
    </tr>  
    <tr style="background-color:#FFC0C0">
      <td>9</td>
      <td>The list of months submitted along with the country and number of locations is displayed below the table (using Sessions)</td>
      <td align="center">15</td>
    </tr>    
    <tr style="background-color:#FFC0C0">
      <td>10</td>
      <td>Random locations should be ordered alphabetically, if user checks corresponding radio button (A-Z or Z-A). </td>
      <td align="center">15</td>
    </tr>        
    <tr style="background-color:#FFC0C0">
      <td>11</td>
      <td>The web page uses Bootstrap and has a nice look. </td>
      <td align="center">5</td>
    </tr>        
    <tr style="background-color:#99E999">
      <td>12</td>
      <td>This rubric is properly included AND UPDATED (BONUS)</td>
      <td width="20" align="center">2</td>
    </tr>     
     <tr>
      <td></td>
      <td>T O T A L </td>
      <td width="20" align="center"><b></b></td>
    </tr> 
  </tbody></table>

    </body>
</html>
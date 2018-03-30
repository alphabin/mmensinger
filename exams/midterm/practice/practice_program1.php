<?php

    $alphabet = range("A","Z");
   
    function lettersList() {
        
        global $alphabet;
        
        foreach ($alphabet as $letter) {
            
            echo "<option value='$letter'> $letter </option>";
        }
    }
    
    function getLetterTable($tableSize, $letterToFind, $letterToOmit) {
        
        global $alphabet;
        
        $letterTable = array();
        
        for($i = 0; $i < $tableSize * $tableSize; $i++) {
            
            do {
                $randomLetter = $alphabet[array_rand($alphabet)];
            }
            while ($randomLetter == $letterToFind || $randomLetter == $letterToOmit);
            
            $letterTable[] = $randomLetter;
        }
        
        $letterTable[array_rand($letterTable)] = $letterToFind;
        
        return $letterTable;
    }
    
    function displayTable() {
        
        if(isset($_GET['submit'])) {
            
            $letterToFind = $_GET['letterToFind'];
            $letterToOmit = $_GET['letterToOmit'];
            $tableSize = $_GET['tableSize'];
            
            if($letterToFind == $letterToOmit) {
                
                echo "<br/><br/><strong>Error: Letter to Find MUST be different from Letter to Omit!</strong>";
            }
            
            echo "<hr><h1> Find the Letter " . $letterToFind . " </h1>";
            echo "<strong> Letter to Omit " . $letterToOmit . " </strong><br/>";
            
            $letterTable = getLetterTable($tableSize, $letterToFind, $letterToOmit);
            
            echo "<table border='1' style='margin: auto 0' cellpadding=7>";
            $index = 0;
            
            for($rows = 0; $rows < $tableSize; $rows++) {
                
                echo "<tr>";
                for($cols = 0; $cols < $tableSize; $cols++) {
                    
                    $letterToDisplay = $letterTable[$index];
                    
                    if($letterToDisplay < 'H') {
                        
                        $color = "red";
                    }
                    else if($letterToDisplay < 'P') {
                        
                        $color = "blue";
                    }
                    else {
                        
                        $color = "green";
                    }
                    
                    echo "<td style='color:$color'>" . $letterToDisplay . "</td>";
                    $index++;
                }
                
                echo "</tr>";
            }
            echo "</table>";
        }
    }

?>


<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title> Midterm Practice - Program 1 </title>
    </head>
    
    <style>
        body {
            margin: auto 0;
            text-align: center;
        }
    </style>
    <body>
        
        <h3> Find the Letter! </h3>
        
        <form>
            
            <strong> Select a Letter to Find: </strong>
            <select name="letterToFind">
                <?=lettersList()?>
            </select>
            
            <br/><br/>
            
            Select Table Size:
            <select name="tableSize">
                <option value="6"> 6x6 </option>
                <option value="7"> 7x7</option>
                <option value="8"> 8x8</option>
                <option value="9"> 9x9 </option>
                <option value="10"> 10x10 </option>
            </select>
            
            <br/><br/>
            
            Select Letter to Omit:
            <select name="letterToOmit">
                <?=lettersList()?>
            </select>
            
            <br/><br/>
            <input type="submit" value="Create Table" name="submit">
        </form>
        
        <?=displayTable()?>
    </body>
</html>
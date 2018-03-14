<?php

    function checkCondition($condition) {
        
        if($condition == $_GET['condition']) {
            echo " selected";
        }
    }
    
    function checkHandicap($condition) {
        
         if($condition == $_GET['handicap']) {
            echo " checked";
        }
    }
    function checkCourseType($condition) {
        
        if($condition == $_GET['courseType']) {
            echo " checked";
        }
    }
    
    function displayCourse($condition, $name) {
        
        if($_GET['courseType'] == "Well-known Courses") {
            
            if($_GET['handicap'] == "1-6") {
            
                if($condition == 'Windy') {
                    
                    echo "Quiz Results: <br/>";
                    echo "<img src='img/tpcsawgrass.jpg' alt='TPC Sawgrass' width='500' /> <br/>"; 
                    echo "The blue tees at TPC Sawgrass are perfect for you $name!";
                    
                }
                else if($condition == "Rainy") {
                    
                    echo "Quiz Results: <br/>";
                    echo "<img src='img/royal_portrush.jpg' alt='Royal PortRush' width='500' /> <br/>"; 
                    echo "The blue tees at Royal PortRush are perfect for you $name!";
                }
                else if($condition == "Foggy") {
                    
                    echo "Quiz Results: <br/>";
                    echo "<img src='img/st_andrews.jpg' alt='St. Andrews Golf Links' width='500' /> <br/>"; 
                    echo "The blue tees at St. Andrews are perfect for you $name!";
                }
                else if($condition == "Sunny") {
                    
                    echo "Quiz Results: <br/>";
                    echo "<img src='img/pebblebeach.jpg' alt='Pebble Beach Golf Links' width='500' /> <br/>"; 
                    echo "The blue tees at Pebble Beach are perfect for you $name!";
                }
            }
            else if($_GET['handicap'] == "7-13") {
            
                if($condition == 'Windy') {
                    
                    echo "Quiz Results: <br/>";
                    echo "<img src='img/tpcsawgrass.jpg' alt='TPC Sawgrass' width='500' /> <br/>"; 
                    echo "The gold tees at TPC Sawgrass are perfect for you $name!";
                    
                }
                else if($condition == "Rainy") {
                    
                    echo "Quiz Results: <br/>";
                    echo "<img src='img/royal_portrush.jpg' alt='Royal PortRush' width='500' /> <br/>"; 
                    echo "The gold tees at Royal PortRush are perfect for you $name!";
                }
                else if($condition == "Foggy") {
                    
                    echo "Quiz Results: <br/>";
                    echo "<img src='img/st_andrews.jpg' alt='St. Andrews Golf Links' width='500' /> <br/>"; 
                    echo "The gold tees at St. Andrews are perfect for you $name!";
                }
                else if($condition == "Sunny") {
                    
                    echo "Quiz Results: <br/>";
                    echo "<img src='img/pebblebeach.jpg' alt='Pebble Beach Golf Links' width='500' /> <br/>"; 
                    echo "The gold tees at Pebble Beach are perfect for you $name!";
                }
            }
            
            else {
                if($condition == 'Windy') {
                    
                    echo "Quiz Results: <br/>";
                    echo "<img src='img/tpcsawgrass.jpg' alt='TPC Sawgrass' width='500' /> <br/>"; 
                    echo "The white tees at TPC Sawgrass are perfect for you $name!";
                    
                }
                else if($condition == "Rainy") {
                    
                    echo "Quiz Results: <br/>";
                    echo "<img src='img/royal_portrush.jpg' alt='Royal PortRush' width='500' /> <br/>"; 
                    echo "The white tees at Royal PortRush are perfect for you $name!";
                }
                else if($condition == "Foggy") {
                    
                    echo "Quiz Results: <br/>";
                    echo "<img src='img/st_andrews.jpg' alt='St. Andrews Golf Links' width='500' /> <br/>"; 
                    echo "The white tees at St. Andrews are perfect for you $name!";
                }
                else if($condition == "Sunny") {
                    
                    echo "Quiz Results: <br/>";
                    echo "<img src='img/pebblebeach.jpg' alt='Pebble Beach Golf Links' width='500' /> <br/>"; 
                    echo "The white tees at Pebble Beach are perfect for you $name!";
                }
            }
        }
        
       else if($_GET['courseType'] == "Moderately-known Courses") {
           if($_GET['handicap'] == "1-6") {
            
                if($condition == 'Windy') {
                    
                    echo "Quiz Results: <br/>";
                    echo "<img src='img/spanishbay.jpg' alt='The Link at Spanish Bay' width='500' /> <br/>"; 
                    echo "The blue tees at Spanish Bay are perfect for you $name!";
                    
                }
                else if($condition == "Rainy") {
                    
                    echo "Quiz Results: <br/>";
                    echo "<img src='img/bandondunes.jpg' alt='Bandon Dunes Golf Course' width='500' /> <br/>"; 
                    echo "The blue tees at Bandon Dunes are perfect for you $name!";
                }
                else if($condition == "Foggy") {
                    
                    echo "Quiz Results: <br/>";
                    echo "<img src='img/mpcc.jpg' alt='Monterey Peninsula Country Club' width='500' /> <br/>"; 
                    echo "The blue tees at Monterey Peninsula Country Club are perfect for you $name!";
                }
                else if($condition == "Sunny") {
                    
                    echo "Quiz Results: <br/>";
                    echo "<img src='img/spyglasshill.jpg' alt='Spyglass Hill' width='500' /> <br/>"; 
                    echo "The blue tees at Spyglass Hill are perfect for you $name!";
                }
            }
            else if($_GET['handicap'] == "7-13") {
            
                if($condition == 'Windy') {
                    
                    echo "Quiz Results: <br/>";
                    echo "<img src='img/spanishbay.jpg' alt='The Link at Spanish Bay' width='500' /> <br/>"; 
                    echo "The gold tees at Spanish Bay are perfect for you $name!";
                    
                }
                else if($condition == "Rainy") {
                    
                    echo "Quiz Results: <br/>";
                    echo "<img src='img/bandondunes.jpg' alt='Bandon Dunes Golf Course' width='500' /> <br/>"; 
                    echo "The gold tees at Bandon Dunes are perfect for you $name!";
                }
                else if($condition == "Foggy") {
                    
                    echo "Quiz Results: <br/>";
                    echo "<img src='img/mpcc.jpg' alt='Monterey Peninsula Country Club' width='500' /> <br/>"; 
                    echo "The gold tees at Monterey Peninsula Country Club are perfect for you $name!";
                }
                else if($condition == "Sunny") {
                    
                    echo "Quiz Results: <br/>";
                    echo "<img src='img/spyglasshill.jpg' alt='Spyglass Hill' width='500' /> <br/>"; 
                    echo "The gold tees at Spyglass Hill are perfect for you $name!";
                }
            }
            
            else {
                if($condition == 'Windy') {
                    
                    echo "Quiz Results: <br/>";
                    echo "<img src='img/spanishbay.jpg' alt='The Link at Spanish Bay' width='500' /> <br/>"; 
                    echo "The white tees at Spanish Bay are perfect for you $name!";
                    
                }
                else if($condition == "Rainy") {
                    
                    echo "Quiz Results: <br/>";
                    echo "<img src='img/bandondunes.jpg' alt='Bandon Dunes Golf Course' width='500' /> <br/>"; 
                    echo "The white tees at Bandon Dunes are perfect for you $name!";
                }
                else if($condition == "Foggy") {
                    
                    echo "Quiz Results: <br/>";
                    echo "<img src='img/mpcc.jpg' alt='Monterey Peninsula Country Club' width='500' /> <br/>"; 
                    echo "The white tees at Monterey Peninsula Country Club are perfect for you $name!";
                }
                else if($condition == "Sunny") {
                    
                    echo "Quiz Results: <br/>";
                    echo "<img src='img/spyglasshill.jpg' alt='Spyglass Hill' width='500' /> <br/>"; 
                    echo "The white tees at Spyglass Hill are perfect for you $name!";
                }
            }
        }
        
        else {
            
            if($_GET['handicap'] == "1-6") {
            
                if($condition == 'Windy') {
                    
                    echo "Quiz Results: <br/>";
                    echo "<img src='img/whistling.jpeg' alt='Whistling Straits' width='500' /> <br/>"; 
                    echo "The blue tees at Whistling Straits are perfect for you $name!";
                    
                }
                else if($condition == "Rainy") {
                    
                    echo "Quiz Results: <br/>";
                    echo "<img src='img/harbortown.jpeg' alt='Harbor Town' width='500' /> <br/>"; 
                    echo "The blue tees at Harbor Town are perfect for you $name!";
                }
                else if($condition == "Foggy") {
                    
                    echo "Quiz Results: <br/>";
                    echo "<img src='img/poppy.jpg' alt='Poppy Hills' width='500' /> <br/>"; 
                    echo "The blue tees at Poppy Hills are perfect for you $name!";
                }
                else if($condition == "Sunny") {
                    
                    echo "Quiz Results: <br/>";
                    echo "<img src='img/pasatiempo.jpg' alt='Pasatiempo' width='500' /> <br/>"; 
                    echo "The blue tees at Pasatiempo are perfect for you $name!";
                }
            }
            else if($_GET['handicap'] == "7-13") {
            
                if($condition == 'Windy') {
                    
                    echo "Quiz Results: <br/>";
                    echo "<img src='img/whistling.jpeg' alt='Whistling Straits' width='500' /> <br/>"; 
                    echo "The gold tees at Whistling Straits are perfect for you $name!";
                    
                }
                else if($condition == "Rainy") {
                    
                    echo "Quiz Results: <br/>";
                    echo "<img src='img/harbortown.jpeg' alt='Harbor Town' width='500' /> <br/>"; 
                    echo "The gold tees at Harbor Town are perfect for you $name!";
                }
                else if($condition == "Foggy") {
                    
                    echo "Quiz Results: <br/>";
                    echo "<img src='img/poppy.jpg' alt='Poppy Hills' width='500' /> <br/>"; 
                    echo "The gold tees at Poppy Hills are perfect for you $name!";
                }
                else if($condition == "Sunny") {
                    
                    echo "Quiz Results: <br/>";
                    echo "<img src='img/pasatiempo.jpg' alt='Pasatiempo' width='500' /> <br/>"; 
                    echo "The gold tees at Pasatiempo are perfect for you $name!";
                }
            }
            
            else {
                if($condition == 'Windy') {
                    
                    echo "Quiz Results: <br/>";
                    echo "<img src='img/whistling.jpeg' alt='Whistling Straits' width='500' /> <br/>"; 
                    echo "The white tees at Whistling Straits are perfect for you $name!";
                    
                }
                else if($condition == "Rainy") {
                    
                    echo "Quiz Results: <br/>";
                    echo "<img src='img/harbortown.jpeg' alt='Harbor Town' width='500' /> <br/>"; 
                    echo "The white tees at Harbor Town are perfect for you $name!";
                }
                else if($condition == "Foggy") {
                    
                    echo "Quiz Results: <br/>";
                    echo "<img src='img/poppy.jpg' alt='Poppy Hills' width='500' /> <br/>"; 
                    echo "The white tees at Poppy Hills are perfect for you $name!";
                }
                else if($condition == "Sunny") {
                    
                    echo "Quiz Results: <br/>";
                    echo "<img src='img/pasatiempo.jpg' alt='Pasatiempo' width='500' /> <br/>"; 
                    echo "The white tees at Pasatiempo are perfect for you $name!";
                }
            }
        }
    }
    

?>
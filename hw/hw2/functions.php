<?php

    function createScores() {
        $golfer1 = array ();
        
        for($i = 1; $i <= 18; $i++) {
            $golfer1[$i] = rand(3,5);
            echo $golfer1[$i];
        }
    }
    
    

   

?>
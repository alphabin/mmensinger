<?php

    function displayDie($randomValue, $pos) {
                    
        switch ($randomValue) {
                    
            case 1: $symbol = "one";
                    break;
                            
            case 2: $symbol = "two";
                    break;
                            
            case 3: $symbol = "three";
                    break;
                    
            case 4:$symbol = "four";
                    break;
                    
            case 5:$symbol = "five";
                    break;
                    
            case 6:$symbol = "six";
                    break;
            }
                
            echo "<img id='die$pos' src='img/dieFace_$symbol.png' alt='Die Face $symbol' title='".ucfirst($symbol) . "' width='70' />";
                 
        }
        
        function displayWinner($value1, $value2) {
            
            if($value1 > $value2) {
                
                echo "Player 1 is the winner!";
            }
            else if($value1 < $value2) {
                
                echo "Player 2 is the winner!";
            }
            else {
                
                echo "It's a tie!";
            }
        }
        
        function rollDice() {
            
            
            $player1 = array();
            $player2 = array();
            
            for($i = 0; $i < 5; $i++) {
                
                $player1[$i] = rand(1,6);
                $player2[$i] = rand(1,6);
            }
            
            shuffle($player1);
            shuffle($player2);
            
            $numOfDice = count($player1);
            
            for($i = 0; $i < $numOfDice; $i++) {
                
                displayDie($player1[$i], $i);
            }
            
            $player1Total = array_sum($player1);
            echo $player1Total;
            echo "</br>";
            
            for($i = 0; $i < $numOfDice; $i++) {
                
                displayDie($player2[$i], $i);
            }
            
            $player2Total = array_sum($player2);
            echo $player2Total;
            echo "</br>";
            
            displayWinner($player1Total, $player2Total);
        }

?>
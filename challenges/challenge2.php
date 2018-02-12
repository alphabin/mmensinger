
<?php
    
    function randomCard() {
        
        $randomValue = rand(1,5);
        return $randomValue;       
       
        }
       
    
    
    function displayCard($faceValue) {
        $randomValue = rand(1,4);
        $suit;
        switch($randomValue){
            case 1: 
                $suit="clubs";
                break;
            case 2:
                $suit="diamonds";
                break;
            case 3:
                $suit="hearts";
                break;
            case 4:
                $suit="spades";
                break;
        }
        $face;
        switch($faceValue){
            case 1: 
                $face="ten";
                break;
            case 2:
                $face="jack";
                break;
            case 3:
                $face="queen";
                break;
            case 4:
                $face="king";
                break;
            case 5:
                $face="ace";
                break;
        }
        echo "<img src= 'img/cards/$suit/$face.png' width = '100' />";
    }

?>


<!DOCTYPE html>
<html>
    <head>
        <title> Challenger 2 </title>
    </head>
    <center>
    <body>
        
        <h1> Random Card Game </h1>
      <div>
          <div style="float:left">  
            <h2> Human </h2>
            <?php 
            $human = randomCard();
            displayCard($human) ?>;
         </div>
          
         <div style="float:right">  
            <h2> Computer </h2>
            <?php $computer = randomCard();
            displayCard($computer) 
            ?>;
        </div>
      </div>  
        
        
        
       
        
    </body>
    
    
    <center>
     <footer style="color:green; font-size:25px; clear:left">
            
            <?php 
                if($human > $computer)
                {
                    echo "Human Wins!";
                }
                else if($computer > $human)
                {
                    echo "Computer Wins!";
                }
                else {
                    echo "Tie!";
                }
            ?>
            
        </footer>
        </center> 
</html>
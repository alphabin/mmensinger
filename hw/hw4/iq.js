
var correctAnswer;
var numCorrect = 0;
var currentProblem = 0;
var numSeconds = 0;
var clockTimer;

var question = new Array();
var answer1 = new Array();	// These are the correct answers
var answer2 = new Array();
var answer3 = new Array();
var answer4 = new Array();
var graphic = new Array();
var used = new Array();

question[0] = "How many legs do 2 ducks and 4 dogs have?";
answer1[0] = "20";
answer2[0] = "6";
answer3[0] = "8";
answer4[0] = "12";
graphic[0] = "blank.gif";
used[0] = false;
		
question[1] = "There are 12 pens on the table, you took 3, how many do you have?";
answer1[1] = "3";
answer2[1] = "9";
answer3[1] = "15";
answer4[1] = "6";
graphic[1] = "blank.gif";
used[1] = false;

question[2] = "What goes around the world but stays in a corner?";
answer1[2] = "a stamp";
answer2[2] = "an airplane";
answer3[2] = "a virus";
answer4[2] = "a cobweb";
graphic[2] = "blank.gif";
used[2] = false;

question[3] = "Which number should come next in the series? 1, 1, 2, 3, 5, 8, 13, ___";
answer1[3] = "21";
answer2[3] = "24";
answer3[3] = "32";
answer4[3] = "36";
graphic[3] = "blank.gif";
used[3] = false;

question[4] = "If all Bloops are Razzies and all Razzies are Lazzies, then...";
answer1[4] = "Bloops are always Lazzies";
answer2[4] = "Bloops are sometimes Lazzies";
answer3[4] = "Bloops are never Lazzies";
answer4[4] = "Lazzies are always Bloops";
graphic[4] = "blank.gif";
used[4] = false;

question[5] = "Ralph likes 25 but not 24; he likes 400 but not 300; he likes 144 but not 145. Which does he like:";
answer1[5] = "81";
answer2[5] = "72";
answer3[5] = "60";
answer4[5] = "120";
graphic[5] = "blank.gif";
used[5] = false;

question[6] = "How many triangles are in the diagram below?";
answer1[6] = "27";
answer2[6] = "16";
answer3[6] = "17";
answer4[6] = "32";
graphic[6] = "triangles.gif";
used[6] = false;

question[7] = "How many different-sized squares can be created where each corner is on a dot?";
answer1[7] = "5";
answer2[7] = "4";
answer3[7] = "3";
answer4[7] = "2";
graphic[7] = "squares.jpg";
used[7] = false;

question[8] = "I'm a male. If Albert's son is my son's father, what is the relationship between Albert and I?";
answer1[8] = "Albert is my father";
answer2[8] = "Albert is my brother";
answer3[8] = "Albert is my uncle";
answer4[8] = "Albert is not related to me";
graphic[8] = "blank.gif";
used[8] = false;

question[9] = "A ladder from a boat has 10 steps each 1 foot apart.  Four of the steps are underwater.  If a storm causes the water to rise 2 feet, how many steps will be underwater?";
answer1[9] = "4";
answer2[9] = "2";
answer3[9] = "6";
answer4[9] = "8";
graphic[9] = "blank.gif";
used[9] = false;

question[10] = "Which one of the five is least like the other three?";
answer1[10] = "Snake";
answer2[10] = "Dog";
answer3[10] = "Mouse";
answer4[10] = "Elephant";
graphic[10] = "blank.gif";
used[10] = false;

question[11] = "Mary, who is sixteen years old, is four times as old as her brother. How old will Mary be when she is twice as old as her brother?";
answer1[11] = "24";
answer2[11] = "20";
answer3[11] = "25";
answer4[11] = "26";
graphic[11] = "blank.gif";
used[11] = false;

question[12] = "If you rearrange the letters 'CIFAIPC' you would have the name of a(n):";
answer1[12] = "Ocean";
answer2[12] = "City";
answer3[12] = "Animal";
answer4[12] = "River";
graphic[12] = "blank.gif";
used[12] = false;

question[13] = "Choose the number that is 1/4 of 1/2 of 1/5 of 200:";
answer1[13] = "5";
answer2[13] = "20";
answer3[13] = "2";
answer4[13] = "25";
graphic[13] = "blank.gif";
used[13] = false;

question[14] = "John needs 13 bottles of water from the store. John can only carry 3 at a time. What's the minimum number of trips John needs to make to the store?";
answer1[14] = "5";
answer2[14] = "3";
answer3[14] = "4";
answer4[14] = "4 1/2";
graphic[14] = "blank.gif";
used[14] = false;

question[15] = "Choose the word most similar to 'Trustworthy':";
answer1[15] = "Reliable";
answer2[15] = "Resolute";
answer3[15] = "Insolent";
answer4[15] = "Relevant";
graphic[15] = "blank.gif";
used[15] = false;

question[16] = "If you rearrange the letters 'LNGEDNA' you have the name of a(n):";
answer1[16] = "Country";
answer2[16] = "State";
answer3[16] = "Ocean";
answer4[16] = "City";
graphic[16] = "blank.gif";
used[16] = false;

question[17] = "How many four-sided figures appear in the diagram below?";
answer1[17] = "25";
answer2[17] = "22";
answer3[17] = "28";
answer4[17] = "16";
graphic[17] = "four_sided.gif";
used[17] = false;

question[18] = "Which one of the following things is the least like the others?";
answer1[18] = "Flower";
answer2[18] = "Poem";
answer3[18] = "Novel";
answer4[18] = "Statue";
graphic[18] = "blank.gif";
used[18] = false;

question[19] = "Which one of the numbers does not belong in the following series? 2 - 3 - 6 - 7 - 8 - 14 - 15 - 30";
answer1[19] = "Eight";
answer2[19] = "Seven";
answer3[19] = "Fifteen";
answer4[19] = "Thirty";
graphic[19] = "blank.gif";
used[19] = false;

$("#answer1").click( function() {
    
    if($(this).text() == correctAnswer) {
        
        numCorrect++;
    }
    newProblem();
})

$("#answer2").click( function() {
    
    if($(this).text() == correctAnswer) {
        
        numCorrect++;
    }
    newProblem();
})

$("#answer3").click( function() {
    
    if($(this).text() == correctAnswer) {
        
        numCorrect++;
    }
    newProblem();
})

$("#answer4").click( function() {
    
    if($(this).text() == correctAnswer) {
        
        numCorrect++;
    }
    newProblem();
})

$("#startButton").click( function() {
    
    document.getElementById('introScreen').style.display = 'none';
    clockTimer = window.setInterval(updateClock, 1000);
    newProblem();
})

function updateClock() {
    
    numSeconds++;
}

function newProblem() {
    
    if(currentProblem == 10) {
        
        if(numCorrect > 6) {
            
            testScreen.innerHTML = '<h1>You are a Genius</h1>';
        }
        
        else if(numCorrect > 4) {
            
            testScreen.innerHTML = '<h1>Quite smart I would say</h1>';
        }
        
        else {
            
            testScreen.innerHTML = '<h1>Are you awake today?</h1>';
        }
        
        testScreen.innerHTML += '<h3>You got <b>' + numCorrect + '</b> questions correct!</h3>';
        testScreen.innerHTML += '<h3>You took <b>' + numSeconds + '</b> seconds to complete the test.</h3>';
        
        clearInterval(clockTimer);
    }
    
    else {
        
        currentProblem++;
        
        var rp;
        
        do {
            
            rp = Math.floor(Math.random() * 20); //0 to 19, rp = Random Problem 
        }
        while(used[rp]);
        
        used[rp] = true; //It has now been used
        
        var q = document.getElementById('question');
        q.innerHTML = currentProblem + '. ' + question[rp];
        
        document.getElementById('graphic').src = graphic[rp];
        
        correctAnswer = answer1[rp];
        
        //Randomize answers
        var r1, r2, r3, r4;
        r1 = Math.floor(Math.random() * 4) + 1; //1 to 4
        
        do {
            r2 = Math.floor(Math.random() * 4) + 1;
        }
        while(r2 == r1);
        
        do {
            r3 = Math.floor(Math.random() * 4) + 1;
        }
        while(r3 == r1 || r3 == r2);
        
        r4 = 10 - (r1 + r2 + r3);
        
       
        document.getElementById('answer' + r1).innerHTML = answer1[rp];
        document.getElementById('answer' + r2).innerHTML = answer2[rp];
        document.getElementById('answer' + r3).innerHTML = answer3[rp];
        document.getElementById('answer' + r4).innerHTML = answer4[rp];
    }
    
}


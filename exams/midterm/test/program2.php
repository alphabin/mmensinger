<?php

    include '../../../dbConnection.php';
    $dbConn = getDatabaseConnection("midterm");
    
    
    echo "1. Name and country of birth of female actresses who were not born in the USA <br/><br/>";
    $sql = "SELECT firstName, lastName, country_of_birth 
            FROM `celebrity` 
            WHERE country_of_birth != 'USA' AND gender = 'F'
            ORDER BY lastName";
            
    $stmt = $dbConn->query($sql);
    $results = $stmt->fetchAll();
    foreach($results as $record) {
        
        echo $record['firstName'] . " " . $record['lastName'] . " - " . $record['country_of_birth'] . "<br/>";
    }
    
    echo "<br/><br/>";


    echo "2. Number of movies per category and their average duration<br/><br/>";
    $sql = "SELECT movie_category, count(movie_title) Number_of_Movies, AVG(duration) Average_Duration 
            FROM `movie` 
            WHERE 1
            GROUP BY movie_category";
    
             
    $stmt = $dbConn->query($sql);
    $results = $stmt->fetchAll();
    foreach($results as $record) {
        
        echo $record['movie_category'] . ", " . $record['Number_of_Movies'] . " - " . $record['Average_Duration'] . "<br/>";
    }
    
    echo "<br/><br/>";

    echo "3. Top 3 longest movies released after 2000<br/><br/>";
    $sql = "SELECT * 
            FROM `movie` 
            WHERE release_year > 2000
            ORDER BY duration DESC
            LIMIT 3";
            
    $stmt = $dbConn->query($sql);
    $results = $stmt->fetchAll();
    foreach($results as $record) {
        
        echo $record['movie_title'] . " (" . $record['movie_category'] . ") -" . $record['duration'] . ", " . $record['company'] . ", " . $record['release_year'] . "<br/>";
    } 
    
    echo "<br/><br/>";
    
    echo "4. List of actors and actresses who have not won an academy award, ordered by last name<br/><br/>";
    $sql = "SELECT firstName, lastName
            FROM `celebrity` 
            LEFT JOIN oscar ON celebrity.celebrityId = oscar.celebrity_id
            WHERE oscar.award_cat_id IS NULL
            ORDER BY lastName";
            
    $stmt = $dbConn->query($sql);
    $results = $stmt->fetchAll();
    foreach($results as $record) {
        
        echo $record['firstName'] . " " . $record['lastName'] . "<br/>";
    }
    
    echo "<br/><br/>";
    
    echo "5. List of celebrities who have won an oscar, ordered by 'award_year'<br/><br/>";
    $sql = "SELECT  celebrity.firstName, celebrity.lastName, movie.movie_title, award_category.award_category, oscar.award_year
            FROM `oscar`
            INNER JOIN celebrity ON oscar.celebrity_id = celebrity.celebrityId
            INNER JOIN movie ON oscar.movieId = movie.movieId
            INNER JOIN award_category ON oscar.award_cat_id = award_category.award_cat_id
            WHERE 1
            ORDER BY award_year";
            
    $stmt = $dbConn->query($sql);
    $results = $stmt->fetchAll();
    foreach($results as $record) {
        
        echo $record['firstName'] . " " . $record['lastName'] . " - " . $record['movie_title'] . ": " . $record['award_category'] . " (" . $record['award_year'] . ")<br/>";
    }
    
    echo "<br/><br/>";
?>

<!DOCTYPE html>
<html>
    <head>
        <title> </title>
    </head>
    <body>

          
  <table border="1" width="600">
    <tbody><tr><th>#</th><th>Task Description</th><th>Points</th></tr>
    <tr style="background-color:#99E999">
      <td>1</td>
      <td>Name and country of birth of female actresses who were NOT born in the USA, ordered by last name</td>
      <td width="20" align="center">15</td>
    </tr>  
    <tr style="background-color:#99E999">
      <td>2</td>
      <td>Number of movies per category and their average duration</td>
      <td width="20" align="center">15</td>
    </tr>  
    <tr style="background-color:#99E999">
      <td>3</td>
      <td>All info about the top three longest movies released after 2000</td>
      <td width="20" align="center">15</td>
    </tr>     
     <tr style="background-color:#99E999">
       <td>4</td>
       <td>List of  actors and actresses who have not won an academy award, ordered by last name </td>
       <td align="center">15</td>
     </tr>
     <tr style="background-color:#99E999">
      <td>5</td>
      <td>List of celebrities who have won an oscar, ordered by "award_year". Include full name, movie title, oscar year, and award category.</td>
      <td width="20" align="center">15</td>
    </tr>     
     <tr style="background-color:#99E999">
      <td>6</td>
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
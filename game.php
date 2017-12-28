
<!DOCTYPE html>
<head>
<meta charset="utf-8">
   
<title>Memory Battle</title>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link type="text/css" href="style.css" rel="stylesheet">

</head>
<html>
<body>

    <section class="intro">
    <div class="inner">
                
<div class="content">
            <h1>Календарь игр</h1>
        <div class="sidebar1">
           <h2>
            <?php 
               
               
if(isset($_POST['submit'])) {              
               
require_once './Fixture.php'; 
//Example with a pair number of teams 
$teams = ["Real","MC","Bayern","Зенит", "Спартак", "Napoli", "Sevilla", "Borussia", "Juventus", "MU", "Arsenal", "Liverpool", "Barcelona", "RB", "Roma", "Chelsea", "Valencia"]; 
$fixPair = new Fixture($teams); 
$schedule = $fixPair->getSchedule(); 
//show the rounds 
$i = 1; 
foreach($schedule as $rounds){ 
    echo "<h3>Тур {$i}</h3>"; 
    foreach($rounds as $game){ 
        echo "{$game[0]} vs {$game[1]}<br>"; 
    } 
    echo "<br>"; 
    $i++; 
} 
    

    
}


//Example with a odd number of teams 
//$otherTeams = array("Portugal", "Argentina", "South Korea", "Australia", "Egypt"); 
//$fixOdd = new Fixture($otherTeams); 
//$games = $fixOdd->getSchedule(); 
//$i = 1; 
//foreach($games as $rounds){ 
//    $free = ""; 
//    echo "<h3>Round {$i}</h3>"; 
//    foreach($rounds as $match){ 
//        if($match[0] == "free this round"){ 
//            $free = "<span style='color:red;'>{$match[1]} is {$match[0]}</span><br>"; 
//        }elseif($match[1] == "free this round"){ 
//            $free = "<span style='color:red;'>{$match[0]} is {$match[1]}</span><br>"; 
//        }else{ 
//            echo "{$match[0]} vs {$match[1]}<br>"; 
//        } 
//    } 
//    echo $free; 
//    echo "<br>"; 
//    $i++; 
//} 
               
               ?>
               
<!--
   <?php 


      
      
      
if(isset($_POST['submit'])){
 
$teamArray = ["Real","MC","Bayern","Зенит", "Спартак", "Napoli", "Sevilla", "Borussia", "Juventus", "MU", "Arsenal", "Liverpool", "Barcelona", "RB", "Roma", "Chelsea"];

shuffle($teamArray);

                   
echo array_pop($teamArray)," - ",array_pop($teamArray),"<br>";
echo array_pop($teamArray)," - ",array_pop($teamArray),"<br>";
echo array_pop($teamArray)," - ",array_pop($teamArray),"<br>";
echo array_pop($teamArray)," - ",array_pop($teamArray),"<br>";
echo array_pop($teamArray)," - ",array_pop($teamArray),"<br>";
echo array_pop($teamArray)," - ",array_pop($teamArray),"<br>";
echo array_pop($teamArray)," - ",array_pop($teamArray),"<br>";
echo array_pop($teamArray)," - ",array_pop($teamArray),"<br>";

}
              
               ?>  
-->

<!--
               <?php
               
if (isset($_POST['submit'])){
$totalRounds = 1;
           
$teams= ["Real","Milan","Barcelona","Inter","MU", "Juventus", "MC", "Liverpool", "PSG", "Fiorentina", "Arsenal", "Atletico", "Bayern", "Villareal", "Sevilla", "Totenham", "Chelsea", "Monaco"];

echo 'Total Teams: ' , $totalTeams = count($teams) , '<br/>';
$turns = $totalTeams;
for($round=1; $round<$totalRounds+1; $round++){
        for($homeTeam = 0; $homeTeam < $totalTeams - 1; $homeTeam++) {
            for($awayTeam=$homeTeam + 1; $awayTeam < $totalTeams; $awayTeam++) {
             $home= $teams[$homeTeam];
               $away= $teams[$awayTeam];
                
               echo $home . " vs " . $away;
               echo "<br>";
       }
   }
}
               }
    ?>           
-->
               
     
                   
<!--
                if(isset($_POST['submit'])) {
                    
                   
                   
$teams = array(
    'Team 1',
    'Team 2',
    'Team 3',
    'Team 4',
    'Team 5',
    'Team 6',
    'Team 7',
    'Team 8'
);

function getMatches($teams) {
    shuffle($teams);
    return call_user_func_array('array_combine', array_chunk($teams, sizeof($teams) / 2));
}

for ($i = 0; $i < 14; $i += 1) {
    echo (getMatches($teams));
}
               
                }
              
-->
            </h2>    
            </div>
            <div class="form-group">
                <div class="row">
                    <div  class="col-sm-4">
                        <form action="game.php" method="post" class="form control">

                        <input class="btn" type="submit" value="Go!" name="submit">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </section>
    

</body>
</html>
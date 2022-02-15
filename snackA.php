<?php
    $matchday=array(
        array(
        homeTeam => "Virtus Bologna",
        awayTeam => "Cremona",
        homePoints => 79,
        awayPoints => 71,
        ),
        array(
        homeTeam => "Olimpia Milano",
        awayTeam => "Fortitudo Bologna",
        homePoints => 73,
        awayPoints => 63,
        ),
        array(
        homeTeam => "Napoli",
        awayTeam => "Trieste",
        homePoints => 89,
        awayPoints => 82,
        ),
        array(
        homeTeam => "VL Pesaro",
        awayTeam => "Universo Treviso",
        homePoints => 105,
        awayPoints => 108,
        ),
    );    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SnackA</title>
</head>
<body>
    <?php 
        for($i=0;$i<count($matchday);$i++) {
            echo $matchday[$i][homeTeam]." ".$matchday[$i][homePoints]." - ".$matchday[$i][awayTeam]." ".$matchday[$i][awayPoints]."<br>";
        }
    ?>
</body>
</html>
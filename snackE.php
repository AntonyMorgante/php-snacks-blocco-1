<?php
    $class=array(
        array(
        nome => "Tal",
        cognome => "dei Tali",
        voti => array(8,7,6,9,7,4)
        ),
        array(
        nome => "Tizio",
        cognome => "Caio Sempronio",
        voti => array(3,7,5,8,6,7)
        ),
        array(
        nome => "Persona",
        cognome => "Qualunque",
        voti => array(6,6,4,7,6,6)
        ),
        array(
        nome => "Voti",
        cognome => "Alti",
        voti => array(10,9,9,8,9,8)
        ),
    );    
    for ($i=0;$i<count($class);$i++){
        $class[$i][media] = round((array_sum($class[$i][voti])/count($class[$i][voti])),2);
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        for ($i=0;$i<count($class);$i++){
            echo $class[$i][nome]." ".$class[$i][cognome]." , media voti: ".$class[$i][media]."<br>";
        }
    ?>
</body>
</html>
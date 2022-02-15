<?php
    $array=array();
    while (count($array)<15){
        array_push($array,rand(0,100));
        $array = array_unique($array);
    }
    sort($array, SORT_NUMERIC);
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
    echo "[";
        for ($i=0;$i<count($array);$i++){
            echo $array[$i].",";
        }
        echo "]";
    ?>
</body>
</html>
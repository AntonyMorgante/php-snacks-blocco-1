<?php
    $paragraph = "Lorem ipsum dolor sit amet consectetur adipisicing elit. Animi ad, quo, labore, 
    sapiente totam quisquam quod ducimus excepturi nam hic inventore veniam pariatur reprehenderit unde architecto laboriosam praesentium consequatur eligendi!
    Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugit illo recusandae, obcaecati provident nobis consequatur corporis. 
    Cupiditate blanditiis, ad doloremque consectetur repellat culpa! Fugit modi dolore provident dolorem necessitatibus. In!
    Lorem ipsum dolor sit, amet consectetur adipisicing elit. Veritatis hic quisquam a ratione similique dolores sit itaque harum quo voluptate, 
    temporibus possimus quaerat reiciendis ipsam quis nostrum. Ipsam, in sed.";

    $paragraph= str_replace(".",". <br>",$paragraph);
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
        echo $paragraph;
    ?>
</body>
</html>
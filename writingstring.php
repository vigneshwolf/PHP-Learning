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
    $myString = "My Bug";
    $myString{0} = "m";
    $myString{5} = "s";

    echo $myString;
    ?>
    

    
</body>
</html>
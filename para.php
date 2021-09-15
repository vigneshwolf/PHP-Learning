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
     function showString ()
     {
         $myString = " local string";
         echo "myString = $myString <br>";
         $globalString = $GLOBALS ['myString'];
         echo "Global $myString = $globalString <br>";
     }
     $myString = "global String";
     echo "$myString = $myString <br>";
     showString();
     ?>
</body>
</html>
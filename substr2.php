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
    $myString = "There is a cat in the tree.";
    $subString = Substr ($myString ,11,3);
    echo "subString = $subString <br>";
    ?>

    <?php
    $myString = "There is a cat in the tree";
    echo "Original String = $myString<br>";
    $myString = substr_replace ($myString,"dog",11,3);
    echo "New String = $myString<br>";
    ?>
</body>
</html>
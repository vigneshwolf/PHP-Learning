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
    $string = "        This is a string with lots of whitespace      ";
    echo "Before trim [$string]";
    $trimmedString = trim($string);
    echo "After Trim [$trimmedString]";
    ?>
</body>
</html>
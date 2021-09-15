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
    $character = 'A';
    $asciicode = ord($character);
    echo "The ASCII code for $character is" .$asciicode. '<br>';
    $char = chr($asciicode);
    echo "The character for ASCII code for $asciicode is" .$char. '<br>';
    ?>
</body>
</html>
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
    $myString = "jkdfkutuoiop";
    echo "Before change = $myString";
    $myString{1} = 'B';
    echo "Before change = $myString";
    ?>
    <?php
    $myString = "abcghejfhj";
    $myChar = $myString{1};
    echo "2nd Char = $myChar";
    ?>
</body>
</html>
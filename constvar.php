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
    define ('MY_CONSTANT',"this is a constant string.");
    $constantName = 'MY_CONSTANT';
    if (defined ($constantName))
    {
        echo constant ($constantName);
    }
    else 
    {
        echo "$constantName constant is not defined.";
    }
    ?>
</body>
</html>
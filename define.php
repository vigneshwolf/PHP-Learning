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
    define ('MY_CONSTANT', 36)
    if (defined ('MY_CONSTANT'))
    {
        echo "Constant is defined";
    }
    else
    {
        echo "Constant is not defined";
    }
    ?>
</body>
</html>
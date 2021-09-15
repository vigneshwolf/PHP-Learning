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
    $result = stat ("todo.txt");
    echo "File size is $results[size]<br>";
    echo "File last modified on $result[mtime]<br>";
    echo "File occupies $results[blocks] filesystem blocks<br>";
    ?>
</body>
</html>
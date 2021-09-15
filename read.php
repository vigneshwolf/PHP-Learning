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
    $fileHandle = fopen('todo.txt','w+')
    OR die ("can't open file\n");
    fwrite ($fileHandle, "This line of text was written by PHP\n");
    fclose ($fileHandle);
    $fileHandle = fopen('todo.txt','r')
    OR die ("Can't open file\n");
    $fileData = fread ($fileHandle,1024);
    echo "data = $fileData";
    fclose($fileHandle);
    ?>
</body>
</html>
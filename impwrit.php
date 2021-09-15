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
    $fileHandle = fopen ('todo.txt','w+') OR die ("can't open file\n");
    $result = fwrite ($fileHandle, "This line of text was written by php\n");
    if ($result)
    {
        echo "Data written sucessfully.<br>";
    } else {
        echo "Data write failed.<br>";
    }
    fclose($fileHandle);
    ?>
</body>
</html>
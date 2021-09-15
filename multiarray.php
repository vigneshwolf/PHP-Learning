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
     $books = array();
     $books[0] = array('title'=>'javascript in 24 hours','author'=>'Moncur');
     $books[1] = array('title'=>'javascript unleashed','aurthor'=>'Wyke');
     $books[2] = array('title'=>'network+ second edition','aurthor'=>'Harwood');
     echo $books[1]['aurthor'];
     ?>
</body>
</html>
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
    $customerArray = array('customerName'=>'John Smith','customerAddress'=>'1 The Street','accountNumber'=>'123456789');
    foreach ($customerArray as $Key=>$Value)
    {
        echo "Key = $Key <br>";
        echo "Value = $Value <br>";
    }
    ?>
</body>
</html>
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
    $customerArray = array('customerName'=>'john smith', 'customerAddress'=>'1 The Street', 'accountNumber'=>'12456789');
     echo $customerArray['customerName'];
     echo $customerArray['customerAddress'];
     echo $customerArray['accountNumber'];
    ?>
</body>
</html>
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
    $carModel = "Edge";

    switch ($carModel)
    {
        case "Caravan":
        print "Manufactured by Dodge";
        break;

        case "Supra":
        print "Manufactured by Toyota";
        break;

        case "Edge":
        print "Manufactured by Ford";
        break;

    }
    ?>
</body>
</html>
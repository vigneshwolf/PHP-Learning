<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="postfull.php" method="post">
        Name:<input type="text" name="customerName" value=""/><br>
        Email:<input type="text" name="emailAddress" value=""/><br>
        Send Email Newsletters:<input type="checkbox" name="sendNews" checked/>
        <input type="submit" name="submit_button" value="Press to Submit"/>
</form>
<?php
echo "Your name is". $_POST['customerName']."<br>";
echo "Your email adderess is" . $_POST['emailAddress']."<br>";
if (array_key_exists('sendNews',$_POST))
{
    echo "You have requested our newsletter<br>";
} else {
    echo "You have declined our newsletter<br>";
}
?>
</body>
</html>
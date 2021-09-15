<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>simple html form</title>
</head>
<body>
  <form aciton="singup.php" method="POST">
      Username:<input type="text" name="username"/><br/>
      Email:<input type="text" name="email"/><br/>
      Password:<input type="text" name="password"/><br/>
      Confirm password:<input type="text" name="password_confirm"/><br/>
      <input type="submit" value="Register"/>
</form>
<?php
$username = $_POST['username'];
$email = $_POST['email'];
$password = $_POST['password'];
$passwordconfirm = $_POST['username'];
?>
<?php
$data = $_POST;
if (empty($data['username']) ||
    empty($data['password']) ||
    empty($data['email']) ||
    empty($data['password_confirm'])) {
        //do somethig
    }
    ?>
    
</body>
</html>
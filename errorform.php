<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .error {color:#FF0000;}
        </style>
</head>
<body>
    <?php
    $namErr = $emailErr = $genderErr = $websiteErr ="";
    $name = $email = $gender = $comment = $website ="";
    if ($_SERVER["REQUEST_METHOD"]=="POST"){
        if (empty($_POST["name"])){
            $nameErr = "Name is required";
        }else {
            $name = test_input($_POST["name"]);
        }
        if (empty($_POST["email"])) {
            $emailErr = "Email is required";
        } else {
            $email = test_input($_POST["email"]);
        }
        if (empty($_POST["website"])) {
            $website = "";
        } else {
            $website = test_input($_POST["website"]);
        }
        if (empty($_POST["comment"])) {
            $comment = "";
        } else {
            $email = test_input($_POST["comment"]);
        }
        if (empty($_POST["gender"])) {
            $gender = "Gender is required";
        } else {
            $email = test_input($_POST["gender"]);
        }
    }
    function test_input($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
        }
        ?>
        <h3>PHP FORM VALIDATION EXAMPLE</h3>
        <p><spam calss="error">*required field</span></P>
        <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
        Name: <input type="text" name="name">
        <spam calss="error">* <?php echo $namErr;?></span>
        <br><br>
        E-mail: <input type="text" name="email">
        <spam calss="error">* <?php echo $emailErr;?></span>
        <br><br>
        Website: <input type="text" name="website">
        <spam calss="error">* <?php echo $websiteErr;?></span>
        <br><br>
        Comment:<textarea name="comment" rows="5" cols="40"></textarea>
        <br><br>
        Gender:
        <input type="radio" name="gender" value="female">Female
        <input type="radio" name="gender" value="male">Male
        <input type="radio" name="gender" value="others">Others
        <span class="error">*<?php echo $genderErr;?></span>
        <br><br>
        <input type="submit" name="submit" value="submit">
    </form>

    <?php
    echo "<h2> Your Input;</h2>";
    echo $name;
    echo "<br>";
    echo $email;
    echo "<br>";
    echo $website;
    echo "<br>";
    echo $comment;
    echo "<br>";
    echo $gender;
    ?>






</body>
</html>
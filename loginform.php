<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body {font-family:Arial, Helvetica, sans-serif;}
        form {border:3px solid #f1f1f1;}
        input[type=text],input[type=password]{
            width:100%;
            padding:12px 20px;
            margin:8px0;
            display: inline-block;
            border: 1px solid #ccc;
            box-sizing: border-box;
        }
        button {
            background-color: #04AA6D;
            color: white;
            padding: 14px 20px;
            margin: 8px 0;
            border: none;
            cursor: pointer;
            width: 100%;
        }
        button:hover{
            opacity:0.8;
        }
        .cancelbtn{
            width: auto;
            padding: 10px 18px;
            background-color: #f44336;
        }
        .imgcontainer{
            text-align: center;
            margin: 24px 0 12px 0;
        }
        img.avatar{
            width: 40%;
            border-radius: 50%;
        }
        .container{
            padding:16px;
        }
        span.psw{
            float: right;
            padding-top: 16px;
        }
        @media screen and (max-width:300px){
            span.psw{
                display: block;
                float: none;
            }
            .cancelbtn{
                width:100%
            }
        }
    </style>
</head>
<body>
    <?php
    $uname = $address = $email = $gender = $psw ="";
    if ($_SERVER["REQUEST_METHOD"]=="POST") {
        $uname = test_input ($_POST["uname"]);
        $address = test_input($_POST["address"]);
        $email = test_input($_POST["email"]);
        $gender = test_input($_POST["gender"]);
        $psw = test_input($_POST["password"]);
    } 
    function test_input($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
    ?>
    <h2>Login Form</h2>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>
        <div class="imgcontainer">
            <img src="https://cdn.pixabay.com/photo/2017/03/21/02/00/user-2160923_960_720.png" alt="Avatar" class="avatar">
        </div>
        <div class="container">
            <lable for="uname"><b>Username</b></lable>
            <input type="text" placeholder="Enter username" name="uname" required>
            <br>
            <br>
            <lable for="address"><b>Address</b></lable>
            <input type="text" placeholder="Enter address" name="uname" required>
            <br>
            <br>
            <lable for="email"><b>Email ID</b></lable>
            <input type="text" placeholder="Enter Email ID" name="uname" required>
            Gender:
            <input type="radio" name="gender" value="female">Female
            <input type="radio" name="gender" value="male">Male
            <input type="radio" name="gender" value="Other">Other
            <br>
            <br>
            <lable for="psw"><b>Password</b></lable>
            <input type="password"placeholder="Enter Password" name="psw" required>
            <button type="submit">Submit</button>
        </div>
    </form>

    <?php
    echo "<h2>Login Form</h2>";
    echo $uname;
    echo "<br>";
    echo $address;
    echo "<br>";
    echo $email;
    echo "<br>";
    echo $gender;
    echo "<br>";
    echo $psw;
    ?>

</body>
</html>
<?php
    $fname = $lname = $address = $zip = $city = $state = $eaddress = $phone = $adult = $roomtype1 = $roomtype2 = $checkin = $checkout = $children = $checkindate = $checkoutdate = $room = $instruction ="";
    if ($_SERVER["REQUEST_METHOD"]=="POST") {
        $fname = test_input ($_POST["fname"]);
        $lname = test_input ($_POST["lname"]);
        $address = test_input($_POST["address"]);
        $zip = test_input ($_POST["zip"]);
        $city = test_input ($_POST["city"]);
        $state = test_input ($_POST["state"]);
        $eaddress = test_input($_POST["eaddress"]);
        $phone = test_input ($_POST["phone"]);
        $children = test_input ($_POST["children"]);
        $checkindate = test_input($_POST["checkindate"]);
        $checkoutdate = test_input($_POST["checkoutdate"]);
        $room = test_input ($_POST["room"]);
        $roomtype1 = test_input ($_POST["roomtype1"]);
        $roomtype2 = test_input ($_POST["roomtype2"]);
        $adult= test_input ($_POST["adult"]);
        $checkin= test_input ($_POST["checkin"]);
        $checkout= test_input ($_POST["checkout"]);
        $instruction = test_input ($_POST["instruction"]);
    } 
    function test_input($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
    ?>
    <?php
    echo "<h1>Hotel Reservation Form</h1>";
    echo $fname;
    echo "<br>";
    echo $lname;
    echo "<br>";
    echo $address;
    echo "<br>";
    echo $zip;
    echo "<br>";
    echo $city;
    echo "<br>";
    echo $state;
    echo "<br>";
    echo $eaddress;
    echo "<br>";
    echo $phone;
    echo "<br>";
    echo $children;
    echo "<br>";
    echo $checkindate;
    echo "<br>";
    echo $checkoutdate;
    echo "<br>";
    echo $room;
    echo "<br>";
    echo $instruction;
    echo "<br>";
    echo $adult;
    echo "<br>";
    echo $checkin;
    echo "<br>";
    echo $checkout;
    echo "<br>";
    echo $roomtype1;
    echo "<br>";
    echo $roomtype2;
    echo "<br>";
    ?>

<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require_once "../vendor/autoload.php";

$mail = new PHPMailer(true);
$mail->SMTPDebug = 3;                               
$mail->isSMTP();                                     
$mail->Host = "smtp.gmail.com";
$mail->SMTPAuth = true;                           
$mail->Username = "vigneshwolf5@gmail.com";                 
$mail->Password = "wldCft8456";                           
$mail->SMTPSecure = "tls";                           
$mail->Port = 587;                                   

$mail->From = "vigneshwolf5@gmail.com";
$mail->FromName = "Vignesh";

$mail->addAddress("vigneshwolf5@gmail.com.com", "vignesh");
$mail->addAddress("rajchandru@gmail.com", "rajesh");
$mail->addAddress("tshrinivasan@gmail.com", "shrini");


$mail->isHTML(true);

$mail->Subject = "Reservation Conformed";
$mail->Body = "<h3> Thanks For Visiting Our Hotel </h3>.
<table style='width: 100%;border:1px solid black;'>
        <tr>
          <th style = 'border: 1px solid black'>First Name</th>
          <th style = 'border: 1px solid black'>Last Name</th>
          <th style = 'border: 1px solid black'>Address</th>
          <th style = 'border: 1px solid black'>Zip</th>
          <th style = 'border: 1px solid black'>City</th>
          <th style = 'border: 1px solid black'>State</th>
          <th style = 'border: 1px solid black'>Eaddress</th>
          <th style = 'border: 1px solid black'>Phone</th>
          <th style = 'border: 1px solid black'>Children</th>
          <th style = 'border: 1px solid black'>Check-In Date</th>
          <th style = 'border: 1px solid black'>Check-Out Date</th>
          <th style = 'border: 1px solid black'>Room</th>
          <th style = 'border: 1px solid black'>Instruction</th>
          <th style = 'border: 1px solid black'>Check-In</th>
          <th style = 'border: 1px solid black'>Check-Out</th>
          <th style = 'border: 1px solid black'>Roomtype1</th>
          <th style = 'border: 1px solid black'>Roomtype2</th>
        </tr>
        <tr>
          <td style = 'border: 1px solid black'>$fname</td>
          <td style = 'border: 1px solid black'>$lname</td>
          <td style = 'border: 1px solid black'>$address</td>
          <td style = 'border: 1px solid black'>$zip</td>
          <td style = 'border: 1px solid black'>$city</td>
          <td style = 'border: 1px solid black'>$state</td>
          <td style = 'border: 1px solid black'>$eaddress</td>
          <td style = 'border: 1px solid black'>$phone</td>
          <td style = 'border: 1px solid black'>$children</td>
          <td style = 'border: 1px solid black'>$checkindate</td>
          <td style = 'border: 1px solid black'>$checkoutdate</td>
          <td style = 'border: 1px solid black'>$room</td>
          <td style = 'border: 1px solid black'>$instruction</td>
          <td style = 'border: 1px solid black'>$checkin</td>
          <td style = 'border: 1px solid black'>$checkout</td>
          <td style = 'border: 1px solid black'>$roomtype1</td>
          <td style = 'border: 1px solid black'>$roomtype2</td>
        </tr>
      </table>";
$mail->AltBody = "This is the plain text version of the email content";

try {
    $mail->send();
    echo "Message has been sent successfully";
} catch (Exception $e) {
    echo "Mailer Error: " . $mail->ErrorInfo;
}
?>
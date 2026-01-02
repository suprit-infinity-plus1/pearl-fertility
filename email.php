<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!-- SweetAlert2 -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.2.0/sweetalert2.min.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.2.0/sweetalert2.all.min.js"></script>
<style>
  body {
    font-family: sans-serif;
    text-align: center;
  }

  button {
    background-color: cadetblue;
    color: whitesmoke;
    border: 0;
    -webkit-box-shadow: none;
    box-shadow: none;
    font-size: 18px;
    font-weight: 500;
    border-radius: 7px;
    padding: 15px 35px;
    cursor: pointer;
    white-space: nowrap;
    margin: 10px;
  }

  img {
    width: 200px;
  }

  input[type="text"] {
    padding: 12px 20px;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 10px;
    box-sizing: border-box;
  }

  h1 {
    border-bottom: solid 2px grey;
  }

  #success {
    background: green;
  }

  #error {
    background: red;
  }

  #warning {
    background: coral;
  }

  #info {
    background: cornflowerblue;
  }

  #question {
    background: grey;
  }
</style>
<button style="display:none" id="success">Success</button>

<?php
session_start();

use PHPMailer\PHPMailer\PHPMailer;

// Load Composer autoloader
require 'vendor/autoload.php';
require 'vendor/phpmailer/phpmailer/src/PHPMailer.php';
require 'vendor/phpmailer/phpmailer/src/Exception.php';
require 'vendor/phpmailer/phpmailer/src/SMTP.php';

$mail = new PHPMailer();

$mail->SMTPDebug = 0;
$mail->Host = "mail.pearlfertilityandivf.com";
$mail->Port = 465;
$mail->IsHTML(true);

$mail->setFrom('info@pearlfertilityandivf.com', 'Pearl Fertility');
$mail->addAddress('pearlfertilitynivf@gmail.com', 'Perl Feartility');
$mail->addBCC('sanjaresolutions@gmail.com', 'SanjareSolutions');

$mail->Subject = 'New Appointment Booking';

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $_SESSION["redirection"] = "done";

    // 🔹 Get form fields safely
    $name = ($_POST['name'] != '') ? $_POST['name'] : '';
    $first_name = $_POST['first_name'] ?? '';
    $last_name  = $_POST['last_name'] ?? '';
    $address    = $_POST['address'] ?? '';
    $city       = $_POST['city'] ?? '';
    $phone      = $_POST['phone'] ?? '';
    $email      = $_POST['email'] ?? '';
    $dob        = $_POST['dob'] ?? '';
    $slot       = $_POST['slot'] ?? '';
    $message    = $_POST['message'] ?? '';

    // 🔹 Build email table
    $html = "
    <table style='width:100%; border:2px solid black; border-collapse:collapse'>
        <tr>";

    if ($name) $html .= "<th style='border:2px solid black'>Name</th>";
    if ($first_name) $html .= "<th style='border:2px solid black'>First Name</th>";
    if ($last_name)  $html .= "<th style='border:2px solid black'>Last Name</th>";
    if ($address)    $html .= "<th style='border:2px solid black'>Address</th>";
    if ($city)       $html .= "<th style='border:2px solid black'>City</th>";
    if ($phone)      $html .= "<th style='border:2px solid black'>Phone</th>";
    if ($email)      $html .= "<th style='border:2px solid black'>Email</th>";
    if ($dob)        $html .= "<th style='border:2px solid black'>DOB</th>";
    if ($slot)       $html .= "<th style='border:2px solid black'>Slot</th>";
    if ($message)    $html .= "<th style='border:2px solid black'>Message</th>";

    $html .= "</tr><tr>";

    if ($name) $html .= "<td style='border:2px solid black'>$name</td>";
    if ($first_name) $html .= "<td style='border:2px solid black'>$first_name</td>";
    if ($last_name)  $html .= "<td style='border:2px solid black'>$last_name</td>";
    if ($address)    $html .= "<td style='border:2px solid black'>$address</td>";
    if ($city)       $html .= "<td style='border:2px solid black'>$city</td>";
    if ($phone)      $html .= "<td style='border:2px solid black'>$phone</td>";
    if ($email)      $html .= "<td style='border:2px solid black'>$email</td>";
    if ($dob)        $html .= "<td style='border:2px solid black'>$dob</td>";
    if ($slot)       $html .= "<td style='border:2px solid black'>$slot</td>";
    if ($message)    $html .= "<td style='border:2px solid black'>$message</td>";

    $html .= "</tr></table>";

    $mail->msgHTML($html);
    $mail->AltBody = 'New appointment booking received';
}

if (!$mail->send()) {
    echo "
    <script>
        swal('Error','Mail could not be sent','error');
    </script>";
} else {
    echo "
    <script>
        swal(
            'Success',
            'Your appointment has been <b style=color:green>booked successfully</b>',
            'success'
        );
    </script>";
    session_unset();
}
?>

<script>
document.body.onclick = function () {
    window.location = "https://pearlfertilityandivf.com";
};
</script>

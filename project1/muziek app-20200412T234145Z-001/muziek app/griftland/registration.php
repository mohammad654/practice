
<?php
require('db.php');
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Registration</title>
    <link rel="stylesheet" href="styler.css" />
</head>
<body>
<?php

use PHPMailer\PHPMailer\PHPMailer;
if (isset($_REQUEST['email'])){
    function randomPassword()
    {
        $alphabet = "abcdefghijklmnopqrstuwxyzABCDEFGHIJKLMNOPQRSTUWXYZ0123456789";
        $pass = array(); //remember to declare $pass as an array
        $alphaLength = strlen($alphabet) - 1; //put the length -1 in cache
        for ($i = 0; $i <8; $i++) {
            $n = rand(0, $alphaLength);
            $pass[] = $alphabet[$n];

        }
        return implode($pass);
    }
    $wachtwoord=randomPassword();
    $email = stripslashes($_REQUEST['email']);
    $email = mysqli_real_escape_string($con,$email);
    require_once 'PHPMailer/src/Exception.php';
    require_once 'PHPMailer/src/PHPMailer.php';
    require_once 'PHPMailer/src/SMTP.php';
    $mail = new PHPMailer();
    $mail->isSMTP();
    $mail->SMTPAuth   = TRUE;
    $mail->Host       = "smtp.gmail.com";
    $mail->Username   = "mohammad.ali.shikhi.55@gmail.com";
    $mail->Password   = "Mohammad13590";
    $mail->Port   = "465";
    $mail->SMTPSecure = "ssl";//tls
    $mail->IsHTML(true);
    $mail->SetFrom("  $email", "New penguins");
    $mail->AddAddress("  $email", "New penguins");
    $mail->Subject = "Test is Test Email sent via Gmail SMTP Server using PHP Mailer";
    $mail->Body = "Welkome jouw wachtwoord is : ".$wachtwoord;
    if($mail->send()) {
        //echo "Email sent successfully";

    } else {
        echo "Error while sending Email.";
    }
//
    $email = stripslashes($_REQUEST['email']);
    $email = mysqli_real_escape_string($con,$email);
   // $query = "INSERT into `leerling` ( leerling_nummer, wachtwoord) VALUES ( '$email', '$wachtwoord')";
    $query = "INSERT into `leerling` (leerling_nummer, wachtwoord) VALUES ( '$email', '$wachtwoord')";
    $result = mysqli_query($con,$query);
    if($result){
        echo "<div class='form'>
<h3>You are registered successfully.</h3>
<br/>Click here to <a href='registreren.php'>Login</a></div>";
    }
}else{
    ?>
    <div class="form">
        <h1>Registration</h1>
        <form name="registration" action="" method="post">
            <input type="email" name="email" placeholder="Email" required />
            <input type="submit" name="submit" value="Register" />
        </form>
    </div>
<?php } ?>
</body>
</html>
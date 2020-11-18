

<?php
 session_start();

$email = "";
$errors = array();

$dbservername = "localhost";
$dbusername = "root";
$dbpassword = "";
$dbname = "muziek_app";
$conn = new PDO("mysql:host=$dbservername;dbname=$dbname", $dbusername, $dbpassword);
// set the PDO error mode to exception
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <title>register</title>
    <style>
        body{width: 100%;
            margin: 0;
            padding: 0;
            font-family: sans-serif;
            background-image: url("backround.PNG");

        }
        div{

            text-align:center;
            margin-top:250px;
            position: absolute;
            left:40%;
            width:300px;
        }


       input{display: block;
            width: 100%;
           background-image: linear-gradient( #f3fcfe, #fff7fb);
            padding: 10px 10px;
            font-size: 16px;
            color: #527f60;
            margin-bottom: 30px;
            border: 2px solid #75ef9d;
            border-radius: 14px;
        }

        .my_register:hover{
            background: #68bc1e;
        }
        @media only screen and (max-width: 602px) {
            body{
                background-image: url("music app mobile (1).PNG");
            }
            .box{
                left:51%;
                top: 40%;
            }
        }
    </style>
</head>
<body>
<div class="form" >
    <h1>Registration</h1>
    <form name="registration" action="" method="post">
        <input type="email" name="email" placeholder="Email" required />
        <input type="submit" name="register" value="Register"  class="my_register" />
    </form>
</div>
<?php


//register user
if (isset($_POST['register'])) {

$email = ($_POST['email']);

if (empty($email)) {
array_push($errors, "Email is required");
}
if (count($errors) == 0) {
$stmt = $conn->prepare("INSERT INTO register (email)VALUES (:user_email)");
$stmt->bindParam(':user_name', $email);;
//$stmt->bindParam(':user_password', $password);
$stmt->execute();
}
}
?>
<?php
//Wachtwoord
function randomPassword() {
    $alphabet = "abcdefghijklmnopqrstuwxyzABCDEFGHIJKLMNOPQRSTUWXYZ0123456789";
    $pass = array(); //remember to declare $pass as an array
    $alphaLength = strlen($alphabet) - 1; //put the length -1 in cache
    for ($i = 0; $i < 12;$i++) {
        $n = rand(0, $alphaLength);
        $pass[] = $alphabet[$n];

    }
    return implode($pass);
}

?>

</body>
</html>
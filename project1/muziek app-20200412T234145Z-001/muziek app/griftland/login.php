
<?php
require('db.php');
session_start();
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Login</title>
    <link rel="stylesheet" href="styler.css" />
</head>
<!--<body>-->
<!--<div class="form">-->
<!--    <h1>Log In</h1>-->
<!--    <form action="home.php" method="post" name="login">-->
<!--        <input type="text" name="email" placeholder="email" required />-->
<!--        <input type="password" name="wachtwoord" placeholder="wachtwoord" required />-->
<!--        <input name="submit" type="submit" value="Login" />-->
<!--    </form>-->
<!--    <p>Not registered yet? <a href='registration.php'>Register Here</a></p>-->
<!--</div>-->
<?php
//
//if (isset($_POST['email'])){
//    $email = stripslashes($_REQUEST['email']);
//    $email= mysqli_real_escape_string($con, $email);
//    $email = ($_POST['email']);
//    if (empty($email)) {
//        array_push($errors, "Email is required");
//    }
//    if (count($errors) == 0) {
//        $stmt = $conn->prepare("SELECT * FROM `leerling` WHERE `leerling_nummer` = '$email' AND `wachtwoord` = '$wachtwoord'");
//        $stmt->execute();
//        $result = $stmt->fetchAll();
//        if (count($result) == 1) {
//            $_SESSION['email'] = $email;
//            header("Location: index.php");
//        }
//        else {
//            array_push($errors, "Wrong Username/Email/Password combination");
//            echo "<div class='form'>
//    <h3>Username/password is incorrect.</h3>
//    <br/>Click here to <a href='registreren.php'>Login</a></div>";
//      }
//
//    }
//}
?>
<?php
if (isset($_POST['email'])  ){
    $email = stripslashes($_REQUEST['email']);
    $email= mysqli_real_escape_string($con, $email);
    //$query ="SELECT  leerling_nummer FROM `leerling` WHERE leerling_nummer='$email'AND wachtwoord= '$wachtwoord'";
    $query =" SELECT leerling_nummer FROM `leerling` WHERE leerling.leerling_nummer= $email AND leerling.wachtwoord=$wachtwoord";
    $result = mysqli_query($con,$query) or die(mysql_error());
    $rows = mysqli_num_rows($result);
    if($rows==1){
        $_SESSION['email'] = $email;
        header("Location: index.php");
    }else{
        echo "<div class='form'>
<h3>Username/password is incorrect.</h3>
<br/>Click here to <a href='registreren.php'>Login</a></div>";
    }
}else{
    ?>
    <div class="form">
        <h1>Log In</h1>
        <form action="home.php" method="post" name="login">
            <input type="text" name="email" placeholder="emial" required />
            <input type="password" name="wachtwoord" placeholder="wachtwoord" required />
            <input name="submit" type="submit" value="Login" />
        </form>
        <p>Not registered yet? <a href='registration.php'>Register Here</a></p>
    </div>
<?php } ?>


</body>
</html>
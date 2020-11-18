

<?php
include_once('header.php');
require_once'mail.php';
include_once('connection.php');
include_once('functions.php');
if (isset($_GET['email'])&&isset($_GET['hash'])){
    $email=$_GET['email'];
    $hash=$_GET['hash'];

    $result=getUser($email,$hash,$conn);
    if ($result){
        if($result['verified'] == 1){//verified
            echo  'You  account is already verified';
        }else{
            $stmt = $conn->prepare("UPDATE  user SET  verified = 1 , hash = NULL WHERE email = :email ");
            $stmt->bindParam(':email', $email);
            $stmt->execute();
            header("location: login.php");

        }
    }else {
        echo  "There Is Error  <br>";
        //  the current count
        //add 1 to it
        //if  ocunt > 3 => send new email wihth new hash and make count = 0// else update count
        $stmt = $conn->prepare(" SELECT trying_count FROM user WHERE email = :email ");
        $stmt->bindParam(':email', $email);
        $stmt->execute();
        $result = $stmt->fetch(PDO::FETCH_ASSOC);
        if ($result){
         $count=$result['trying_count']+1;
         if ($count>2){
                 $hash = md5( rand(0,1000) );
                 $stmt = $conn->prepare("UPDATE user SET  hash=:hash,trying_count=0 WHERE email=:email");
             $stmt->bindParam(':email', $email);
                 $stmt->bindParam(':hash', $hash);
                 $stmt->execute();
                 ////  Email Confirmation __________________________________________________________________________
                 ///
                 $e_mail = $email;
                 $e_mail = base64_decode(urldecode($email));
                 $rand = md5(uniqid(mt_rand(), true));
                 $base64 = base64_decode($rand);
                 $modified = str_replace(array('+', '='), array('', ''), $base64);
                 $token = substr($base64, 0, 33);
                 echo $modified;


                 $mail->setFrom(' mohammad.ali.shikhi.55@gmail.com', 'Mohammad ');
                 $mail->addAddress($email, ' PHP');     // Add a recipient
// Content
                 $mail->isHTML(true);                                  // Set email format to HTML
                 $mail->Subject = 'Register';
                 $mail->Body = ' Thank for Subscribe ' . '</b><br>' .

                     'Activation ' . "<b><a href='http://localhost/6-PHP/Whales/activation.php?email=$email&hash=$hash'

                    style='color: greenyellow;font-size: 30px'>". '  Activation' . '</a></b><br>';

                 $mail->send();
                 echo 'New Activation Has been send ';
         }else{
             $stmt = $conn->prepare("UPDATE user SET  trying_count=:trying_count WHERE email=:email");
             $stmt->bindParam(':email', $email);
             $stmt->bindParam(':trying_count', $count);
             $stmt->execute();
         }
        }
    }
}else{
    echo 'Error';
}


require_once('footer.php');
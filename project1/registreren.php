
<?php
include 'mail.php';
include 'connection.php';
echo "<h1 class='text-center'>Registreren :)</h1> ";


//$sql2=$conn->prepare("SELECT *  FROM registreren");
////$sql2->bindParam("value",$search);
//$sql2->execute();
//foreach ( $sql2 AS $items){
//    echo $items['id']."<br>";
//    echo $items['email']."<br>";
//    echo $items['password']."<br>";
//}


 if (isset($_POST['registreren'])){

     if (empty($_POST['email'])){
         echo '<style>
                form {background-color: #e6281e;}
                #exampleInputEmail1{border: 4px solid #32ff21; }
        </style>';
     }

     if ( !empty($_POST['email']) && !empty($_POST['password']) && !empty($_POST['confirm_password'])) {
             $email = htmlspecialchars($_POST['email']);
             $password = htmlspecialchars(md5($_POST['password']));
             $confirm_password = htmlspecialchars(md5($_POST['confirm_password']));
         if ($password == $confirm_password) {
                 if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
                     $stmt = $conn->prepare("INSERT INTO registreren (email,password,confirm_password) VALUES (:email,:password,:confirm_password)");
                     $stmt->bindParam(':email', $email);
                     $stmt->bindParam(':password', $password);
                     $stmt->bindParam(':confirm_password', $confirm_password);
                     $stmt->execute();

                     //Email
                     $e_mail=$_POST['email'];
                     $e_mail=base64_decode(urldecode($_POST['email']));
                     $rand =md5(uniqid(mt_rand(),true));
                     $base64=base64_decode( $rand );
                     $modified=str_replace(array('+','='),array('',''), $base64);
                     $token=substr(  $base64,0,33);


                     $mail->setFrom('mohammad.ali.shikhi.55@gmail.com', 'Mohammad ');
                     $mail->addAddress($_POST['email'], 'PHP');     // Add a recipient


// Content
                     $mail->isHTML(true);                                  // Set email format to HTML
                     $mail->Subject = 'Register';
                     $mail->Body = ' ' . '<b><a href="https://www.griftland.nl/" 
                                    style="color: #2f0cff;font-size: 20px;text-decoration: none;
                                    margin-left: 200px;
                                    text-align: center">'

                         . 'Grifland' . '</a></b><br>' .

                         'Het Griftland College is een christelijke school in Soest voor vwo, havo en mavo (vmbo-tl). <br>
                         Alles onder één dak dus. Wel zo gemakkelijk. Wat wij jou bieden? Natuurlijk streven we naar<br>
                          kwalitatief goed onderwijs, uitstekende examenresultaten en een goede voorbereiding op <br>
                          de toekomst. Onze school staat bekend om haar persoonlijke aandacht voor iedere leerling.<br>
                           Maar we bieden nog veel meer. Extra uitdaging vind je onder andere in mavo XL, de havo Business<br>
                            Class in de bovenbouw of vwo X-tra. Wil je meer creativiteit of sportiviteit? Doe mee aan onze<br>
                             vrijdagmiddagactiviteiten of ons unieke muziektheater. '.'<br>'.

//                         'User Email ' . '<b><span style="color: green">' . $_POST['email'] . '</span></b><br>'.

                         'Text ' . '<b><a href="http://localhost/practice/project1/verify.php" 

                    style="color: greenyellow;font-size: 30px;text-decoration: none;  margin-left: 200px;">' .'Activation' . '</a></b><br>'.
                         'Password : ' . $password .'<br>'.

                     '<span  style="color: #2f0cff;">Soest Noorderweg 79</span><br>
                    
                    <span style="color: #2f0cff;">3761 EV Soest</span><br>
                    
                   <span style="color: #2f0cff;">  Tel: 035 609 82 00</span><br>
                    
                   <span style="color: #2f0cff;">  Geopend van 7:30 – 17:00 uur</span><br>
                    
                     <span style="color: #2f0cff;">Postbus 316, 3760 AH Soest</span><br>';
                     $mail->AddAttachment('img/img.jpg');
                     $mail->send();



                     if ($stmt) {
                         header("location: inloggen.php");
                     } else {
                         header("location: registreren.php");
                     }

                 }else{
                     echo "";
                 }
         }
                 else{
                     echo "pass2";
                 }
                 }else{
             echo " Does't Send Email yet";
         }
  }else{

 }





?>
<!DOCTYPE html>
<html>
<head>
    <title>Muziek App</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link rel="stylesheet" href="main.css">
</head>
<body >

<div class="container text-center">

    <form method="POST">
        <div class="form-group">
            <label for="exampleInputEmail1">Je Email address van School</label>

            <input type="email" class="form-control"  name="email" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Grifland" required>


            <label for="exampleInputPassword1">Password</label>
            <input type="password" class="form-control" id="exampleInputPassword1" name="password" required>

            <label for="exampleInputPassword1"> Confirm password</label>
            <input type="password" class="form-control" id="exampleInputPassword1" name="confirm_password" required>
            <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
            <hr>
        </div>
        <button type="submit" class="btn btn-primary p-2" name="registreren">Registreren</button>
        <a href="inloggen.php"  type="submit" class="btn btn-success p-2" name="registreren">Inloggen</a>
    </form>

</div>
</body>
</html>

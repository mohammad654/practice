

<!--Index-->
<?php $page_title = ' Index'; ?>
<?php require_once('header.php');
include_once('connection.php');

session_start();
$loggedIn = false;
if (isset($_SESSION['my_email'])){
   $email= $_SESSION['my_email'];
$loggedIn = true;
    $stmt = $conn->prepare(" SELECT * FROM user WHERE email=:email");

    $stmt->bindParam(':email', $email);
    $stmt->execute();
        $result = $stmt->fetch(PDO::FETCH_ASSOC);
        echo '<h1 class="text-center"> Welcome : '. $result['first_name'].'</h1><br>';

//    foreach ($result as $user){
//      echo  $result['email'].'<br>';
//    }

}
?>

<p><?php  if (isset($_SESSION['failure']) ){

    echo $_SESSION['failure'];};
unset($_SESSION['failure']);
?>
</p>



<div class="container-fluid index_van">

    <h3>Trotse partner van jouw digitaal succes</h3>
    <p>Digitaal succes is samen een visie realiseren. Jij de vrijheid om de route te bepalen
        terwijl wij ons richten op het betere programmeerwerk. Met een oplossing voor vandaag
        win je het morgen immers niet. We krijgen energie van technische uitdagingen,
        nieuwe technologieën en het zien ontvouwen van business cases. Samen bouwen we de weboplossingen van morgen.
    </p>
    <nav>
        <ul>
            <?php  if (!$loggedIn){
            ?>
            <li><a href="register.php" class="btn btn-primary">Register</a></li>
            <li><a href="login.php" class="btn btn-success ">LogIn</a></li>
            <?php }  ?>

            <?php  if ($loggedIn){
            ?>
            <li><a href="loguit.php" class="btn btn-danger">LogUit</a></li>
            <?php }  ?>
        </ul>
    </nav>
</div>

<?php require_once('footer.php'); ?>


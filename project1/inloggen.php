<?php
include 'mail.php';
include 'connection.php';


echo "<h1 class='text-center'>Inloggen :)</h1> ";
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
<body>

<div class="container text-center">

    <form method="POST">
        <div class="form-group">
            <label for="exampleInputEmail1">Je Email address van School</label>
            <input type="email" class="form-control"  name="email" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Grifland">
            <label for="exampleInputPassword1">Password</label>
            <input type="password" class="form-control" id="exampleInputPassword1" name="password" required>
            <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
        </div>
        <button type="submit" class="btn  btn-success  p-2" name="inloggen">Inloggen</button>
        <a href="inloggen.php"  type="submit" class="btn btn-primary p-2" name="registreren">Registreren</a>
        <button type="submit" class="btn  btn-danger  p-2" name="inloggen">Uitloggen</button>
    </form>
</div>
</body>
</html>


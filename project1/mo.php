<?php
include 'mail.php';
include 'connection.php';
echo "<h1 class='text-center'>Home :)</h1> ";



?>
<div class="dag_div">
    <button type="button" class="btn btn-info btn-lg btn-block dag" id="maandag">Maandag</button>
    <button type="button" class="btn btn-info btn-lg btn-block dag" id="dinsdag">Dinsdag</button>
    <button type="button" class="btn btn-info btn-lg btn-block dag" id="woensdag">Woensdag</button>
    <button type="button" class="btn btn-info btn-lg btn-block dag" id="doenderdag">Doenderdag</button>
    <button type="button" class="btn btn-info btn-lg btn-block dag" id="vrijdag">Vrijdag</button>
</div>

<div class="lokaal_div">
    <button type="button" class="btn btn-info btn-lg btn-block lokaal" >Lokaal  10</button>
    <button type="button" class="btn btn-info btn-lg btn-block lokaal" >Lokaal 10a</button>
    <button type="button" class="btn btn-info btn-lg btn-block lokaal" >Lokaal 10b</button>
    <button type="button"  class="btn btn-info btn-lg btn-block terug_lokaal" ><i class="fa fa-arrow-left" style="font-size:30px;"></i> </button>
</div>


<div class="instrumenten_div">

    <form action="">
        <div class="div3 text-center">Instrumenten</div>
        <input type="radio" aria-label="Radio button for following text input">New <br>
        <input type="checkbox" name="" value=""> cajon <br>
        <input type="checkbox" name="" value=""> jambée <br>
        <input type="checkbox" name="" value=""> percussie<br>
        <input type="checkbox" name="" value=""> microfoonh<br>
        <input type="checkbox" name="" value=""> gitaar electrisch<br>
        <input type="checkbox" name="" value=""> gitaar akoestisch <br>
        <input type="checkbox" name="" value=""> gitaar electrisch<br>
        <input type="checkbox" name="" value=""> drums elektrisch <br>
        <input type="checkbox" name="" value=""> drums akoestisch<br>
        <input type="checkbox" name="" value=""> basgitaar elektrisch<br>
        <input type="checkbox" name="" value=""> basgitaar akoestisch<br>
        <button type="button" class="btn btn-info btn-lg btn-block terug_instrument" ><i class="fa fa-arrow-left" style="font-size:30px;"></i>  </button>
        <button type="button" class="btn btn-info btn-lg btn-block"  id="reserver" >reserveer </button>
    </form>
</div>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<link rel="stylesheet" href="main.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.6.0/moment-with-langs.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/vue/2.6.10/vue.min.js"></script>


<script>
    // document.getElementById('dag').addEventListener("click", function(){
    //     // this.style.display = 'none';
    //     this.classList.add("anim2");
    //
    //    });
    $(".dag").click(function(){
        $(".dag").fadeOut(1000);
        $(".lokaal_div").css("display", "inline");
    });

    $(".").click(function(){
        $(".lokaal_div").fadeOut(1000);
        $(".instrumenten_div").css("display", "inline");
    });


    $(".terug_lokaal").click(function(){
        $(".dag").fadeIn(1000);
        $(".lokaal_div").css("display", "none");
    });

    // $(".dag").click(function(){
    //     $("button").fadeOut(1000);
    // });
    // function myFunction() {
    //     var x = document.getElementById("dag");
    //     if (x.style.display === "none") {
    //         x.style.display = "block";
    //     } else {
    //         x.style.display = "none";
    //     }
    // }
</script>
<script>
    // const m = moment();

    const today = moment();
    moment.lang("NL");

    var dag = today.isoWeekday();
    if (dag>5){
        today.add(8-dag,"days");
    }
    document.getElementById('maandag').innerText=today.format('dddd DD MMMM');


    dag=today.add(1,"days");
    var dag = today.isoWeekday();
    if (dag>5){
        today.add(8-dag,"days");
    }
    document.getElementById("dinsdag").innerText=today.format('dddd DD MMMM');


    dag=today.add(1,"days");
    var dag = today.isoWeekday();
    if (dag>5){
        today.add(8-dag,"days");
    }
    document.getElementById("woensdag").innerText=today.format('dddd DD MMMM');

    dag=today.add(1,"days");
    var dag = today.isoWeekday();
    if (dag>5){
        today.add(8-dag,"days");
    }
    document.getElementById("doenderdag").innerText=today.format('dddd DD MMMM');

    dag=today.add(1,"days");
    var dag = today.isoWeekday();
    if (dag>5){
        today.add(8-dag,"days");
    }
    document.getElementById("vrijdag").innerText=today.format('dddd DD MMMM');

</script>

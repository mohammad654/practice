<?php


?>

<!DOCTYPE html>
<html>
<head>
    <title>Home</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: sans-serif;
            background-image: url("backround.PNG");
            width: 100%;

        }
        button:hover{
            background: lightseagreen;
            width: 310px;
        }
        div{
            margin-top:290px;
            position: absolute;
            left:40%;

        }
        button{
            font-size: 20px;
            display: block;
            border: solid 1px #40ef9f;
            padding: 20px;
            margin:14px ;
            width:300px;
            border-radius: 15px;
            color: white;
            font-weight: bold;
            position: relative;
            background-image: linear-gradient( #3BFE82,   #24A09B);
        }
        .mijn_reservering{
        text-align:center;
        margin-top:230px;
        position: absolute;
        left:40%;
        }
        h1{ display: none;
            border-radius: 15px;
            font-size: 23px;
            color: white;
            text-align:center;
            margin-top:290px;
            position: absolute;
            left:40%;
            background-image: linear-gradient( #3BFE82,   #24A09B);
            width: 350px;
            height: 200px;
            padding: 20px;
        }
        .terug_dag{
            display: none;
            text-align:center;
            margin-top:550px;
            position: absolute;
            left:39%;
            padding: 15px;
        }
        .pauze, .lokaal_div,.instrumenten_div{
            display: none;
        }
        .lokaal{
            margin-bottom: -20px;
        }

       .div3,.terug_instrument{
            text-align: center;
            position: relative;
            margin:15px;
            font-size: 30px;
            display: none;
            padding: 13px;
            border-radius: 15px;
            background-image: linear-gradient( #3BFE82,   #24A09B);
            color: white;
            left:0;
        }
        .terug_instrument{
            top: 88%;
        }
        .instrumenten_div{
            left: 40%;

        }
      form{ display: none;
          font-size: 15px;
          padding: 20px 15px ;
          margin: 20px 20px 10px 10px;
          width:300px;
          border-radius: 15px;
          color: white;
          font-weight: bold;
          position: relative;
          background-image: linear-gradient( #3BFE82,   #24A09B);
      }

        #reserver{
            position: absolute;
            top: 73%;
            left:33%;
            padding:21px;
            font-size: 18px;
            width: 210px;
            display: none;
        }


        p{position: absolute;
            display: none;
            margin-left:40%;
            border: solid 1px #40ef9f;
            padding: 20px;
            width:250px;
            top:30%;
            border-radius: 15px;
            color: white;
            font-weight: bold;
            background-image: linear-gradient( #3BFE82,   #24A09B);
        }

        @media only screen and (max-width: 502px) {
            body{
                background-image: url("music app mobile (1).PNG");
            }

            div {
                top:5%;
                left: 20%;
                font-size:17px;
            }
            button{
                padding: 14px;
                margin: 10px;
                width: 250px;
            }
            .mijn_reservering,h1{
                 padding: 14px;
                 margin: 10px;
                 width: 250px;
                left: 20%;
                top: 27%;
             }
            .terug_dag{
                margin-top:535px;
                left:20%;
            }

            button:hover{
                background: lightseagreen;
                width: 244px;
            }

            .instrumenten_div{
                left: 21%;
                width: 250px;
            }
            .terug_instrument{
                left: -1%;
            }
            #reserver{
                width:180px;
                left: 38%;
            }
            .div3{
                width: 250px;
                margin-right: 20px;
            }
            form{width: 250px;
            }
            p{margin-left:30%;
                width:230px;
                top:35%;
            }
    </style>
</head>
<body>
<div class="dag">
    <button type="button" id="maandag" class="tijd">Maandag</button>
    <button type="button" id="dinsdag" >Dinsdag</button>
    <button type="button" id="woensdag">Woensdag</button>
    <button type="button" id="doenderdag">Doenderdag</button>
    <button type="button" id="vrijdag" >Vrijdag</button>
</div>
<button type="button" class="mijn_reservering"  >mijn reserveringen</button>
<h1>mijn reserveringen zijn:</h1>
<button class="terug_dag" style="width: 60px"> <i class="fa fa-arrow-left" style="font-size:30px;"></i>  </button><br>

<div class="pauze">
    <button class="pauze1" type="button">1e  Pauze</button>
    <button class="pauze2"  type="button">2e  Pauze</button>
    <button class="terug_pauze" style="width: 60px"> <i class="fa fa-arrow-left" style="font-size:30px;"></i>  </button><br>
</div>

<div class="lokaal_div">
    <button class="lokaal"> Lokaal 10 </button><br>
    <button class="lokaal"> Studio 10a </button><br>
    <button class="lokaal"> Studio 10b </button><br>
    <button class="terug_lokaal" style="width: 60px"> <i class="fa fa-arrow-left" style="font-size:30px;"></i>  </button><br>
</div>



<div class="instrumenten_div">
    <div class="div3">Instrumenten</div>
    <form action="">
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
    </form>

    <button class="terug_instrument"  style="width: 65px"> <i class="fa fa-arrow-left" style="font-size:30px;"></i>  </button><br>
    <button id="reserver">reserveer</button><br>
</div>

<p></p>
<script src="https://cdnjs.cloudflare.com/ajax/libs/vue/2.6.10/vue.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.6.0/moment-with-langs.js"></script>
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
<script>
    $(document).ready(function () {
        $(".mijn_reservering").click(function (){
            $(this).fadeOut();
            $("h1,.terug_dag").fadeIn();
            $(".dag").fadeOut();
        });
        $(".terug_dag").click(function (){
            $('h1,.terug_dag').fadeOut();
            $('.dag,.mijn_reservering').fadeIn();
        });

        $(".dag").click(function (){
            $(this).fadeOut();
            $(".mijn_reservering").fadeOut();
            // $("h1").fadeOut(1800);
            $('.pauze,.terug_pauzeg').fadeIn();
        });

        $(".terug_pauze").click(function (){
            $('.pauze,.terug_pauzeg').fadeOut();
            $('.dag,.mijn_reservering').fadeIn();
        });
        $(".pauze1,.pauze2").click(function (){
            $('.pauze,.terug_pauzeg').fadeOut();
            $('.lokaal_div').fadeIn();
        });

        $(".terug_lokaal").click(function (){
            $('.lokaal_div').fadeOut();
            $('.pauze').fadeIn();
        });


        $(".lokaal").click(function (){
            $('.lokaal_div').fadeOut();
            $('.div3,#reserver,.instrumenten_div,.terug_instrument').fadeIn();
            $('form').fadeIn();
        });

        $(".terug_instrument").click(function (){
            $('.instrumenten_div').fadeOut();
            $('.lokaal_div').fadeIn();
        });

        $("#reserver").click(function (){
            $('.instrumenten_div').fadeOut();
            $('p').show().text("Je hebt geresrveerd");

        });

        ;

    });
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/vue/2.6.10/vue.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.6.0/moment-with-langs.js"></script>
</body>
</html>
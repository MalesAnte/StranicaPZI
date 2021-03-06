<?php 

include("dp.php");

$upit = "SELECT * FROM korisnik";

$rezultat = mysqli_query($konekcija, $upit);
?>


<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHONE SPECIFICATION | all in one place</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=sqap" 
    rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <a href="index.php"></a>
    <a href="ponuda.php"></a>
    <a href="login.php"></a>
</head>
<body>
    <div class="header">
        <div class="container">
            <div class="navbar">
                <nav>
                    <ul id="MeniItems">
                    <li><a href="index.php"><b>HOME</b></a></li>
                    <li><a href="ponuda.php"><b>PONUDA</b></a></li>
                    <li><a href="login.php"><b>PRIJAVA</b></a></li>
                    </ul>
                </nav>
            </div>
            <br>
            <div class="row">
                <div class="col-2">
                    <h1>Dobro došli na stranicu<br>PHONE SPECIFICATION</h1>
                    <p>STRANICA JE JOŠ U IZRADI</p>
                    <br>
                    <h5>Viziju projekta možete pogledati <a href="https://drive.google.com/file/d/1jCNbJBS2SSJpoAOb9UJVLzTsT5MiIMOo/view?usp=drivesdk">Ovdje.</a></h5>
                </div>
                <div class="col-2">
                    <img src="slike/pozadina1.jpg">
                </div>
            </div>
        </div>
    </div>

    <br><br><br>

    <!--- TEHNOLOGIJE --->

    <div class="small-container">
        <h2 class="title">TEHNOLOGIJE</h2>
        <div class="row">
            <div class="col-4">
                <img src="slike/frontend.jpg.jpg">
                <h4>FRONTEND TEHNOLOGIJA</h4>
                <p>Za izgled stranice koristimo jezike kao što su HTML,CSS i JavaScript,ali koristimo i Bootstrap i VueJS</p>
            </div>
            <div class="col-4">
                <img src="slike/backend.jpg.jpg">
                <h4>BACKEND TEHNOLOGIJA</h4>
                <p>Za stvaranje stranice koristimo JavaScript i framework Laravel, a za spremanje podataka kotistimo MySQL.</p>
            </div>
        </div>
    </div>
    <!---O NAMA --->
    <div class="onama">
        <h2 class="title">O NAMA</h2>
        <div class="small-container">
            <div class="row">
                <div class="col-3">
                    <img src="slike/Domagoj.jpg.jpg">
                    <h3>Domagoj Vukadin</h3>
                    <p>Student 3. godine Informatika, 20 godina</p>
                    <p> 2014-2018.- Srednja škola Kupres</p>
                    <p>2018.- FPMOZ</p>
                    <br>
                    <i class="fa fa-instagram" aria-hidden="true"><a href="https://www.instagram.com/domacc_/"><b>  domacc_</b></a></i><br>
                    <i class="fa fa-facebook-official" aria-hidden="true"><a href="https://www.facebook.com/domagoj.vukadin.5"><b>  Domgoj Vukadin</b></a></i>
                </div>
                <div class="col-3">
                    <img src="slike/AnteMales.jpg.jpeg">
                    <h3>Ante Maleš</h3>
                    <p>Student 3. godine Informatika, 20 godina</p>
                    <p> 2014-2018.- Srednja škola Kupres</p>
                    <p>2018.- FPMOZ</p>
                    <br><br><br><br>
                    <i class="fa fa-instagram" aria-hidden="true"><a href="https://www.instagram.com/ante.males_99/"><b>  ante.males_99</b></a></i><br>
                    <i class="fa fa-facebook-official" aria-hidden="true"><a href="https://www.facebook.com/antemales3"><b>  Ante Maleš</b></a></i>
                </div>
            </div>
        </div>
    </div>

<!--- ikone --->

<div class="ikone">
    <div class="small-container">
        <div class="row">
            <div class="col-5">
                <img src="slike/samsung2.jpg">
            </div>
            <div class="col-5">
                <img src="slike/iphone2.jpg">
            </div>
            <div class="col-5">
                <img src="slike/huawei2.jpg">
            </div>
            <div class="col-5">
                <img src="slike/xomi.jpg">
            </div>
        </div>
    </div>
</div>

</body>
</html>
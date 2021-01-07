<?php 

require ("dp.php");
if(isset($_POST["imeKorisnika"])) {
    if($_POST["imeKorisnika"] == "" || $_POST["prezimeKorisnika"] == "" || $_POST["emailKorisnika"] == "" ||  $_POST["lozinkaKorisnika"] == "")
    $greska = "Popunite sve podatke";
    else if ( $_POST["lozinkaKorisnika"] != $_POST["provjeraLozinke"])
        $greska = "LOZINKE SE NE PODUDARAJU";
    else{
        $SQL = "INSERT INTO korisnik VALUES ('";
        $SQL.=$_POST["imeKorisnika"] . "', ";
        $SQL.=$_POST["prezimeKorisnika"] . "', ";
        $SQL.=$_POST["emailKorisnika"] . "', ";
        $SQL.=$_POST["lozinkaKorisnika"] . "'); ";
        $rezultat = mysqli_query($konekcija, $SQL);
        }
}

?>

<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PONUDA - PHONE SPECIFICATION | all in one place</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=sqap" 
    rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <a href="index.php"></a>
    <a href="ponuda.php"></a>
    <a href="login.php"></a>
</head>
<body>
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
    </div>

    <br><br><br><br><br><br><br>
<!--- PRIJAVA --->

<div class="prijava">
    <div class="container">
        <div class="row">
            <div class="col-2">
                <div class="form-container">
                    <div class="center">
                        <h1>Registriraj se!</h1>
                        <?php if (isset($greska)):?>
                            <div class="alert alert-danger"><?php echo($greska) ?></div>
                            <?php endif ?>
                        <form method="POST" action="register.php">
                        <form method="post">
                            <div class="txt_field">
                                <span></span>
                                <input type="text" name="imeKorisnika" >
                                <label>Ime</label>
                            </div>
                            <div class="txt_field">
                                <span></span>
                                <input type="text" name="prezimeKorisnika" >
                                <label>Prezime</label>
                            </div>
                            <div class="txt_field">
                                <span></span>
                                <input type="text" name="emailKorisnika" >
                                <label>Email</label>
                            </div>
                            <div class="txt_field">
                                <span></span>
                                <input type="password" name="lozinkaKorisnika" >
                                <label>Lozinka</label>
                            </div>
                            <div class="txt_field">
                                <span></span>
                                <input type="password" name="provjeraLozinke" >
                                <label>Ponovite vašu lozinku</label>
                            </div>
                            <input type="submit" value="Registriraj se">
                            <div class="registrirajse">
                                <p>Ako ste se već bili registrirali stisnite <a href="login.php">ovdje</a></p>
                            </div>
                        </form>
                    </div>
                </div>
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
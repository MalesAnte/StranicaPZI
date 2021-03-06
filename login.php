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

    <br><br><br><br>
    
<!--- PRIJAVA --->

<div class="prijava">
    <div class="container">
        <div class="row">
            <div class="col-2">
                <div class="form-container">
                    <div class="center">
                        <h1>Prijavi se</h1>
                        <form method="post">
                            <div class="txt_field">
                                <span></span>
                                <input type="text" required>
                                <label>Email</label>
                            </div>
                            <div class="txt_field">
                                <span></span>
                                <input type="password" required>
                                <label>Lozinka</label>
                            </div>
                            <input type="submit" value="Prijavi se">
                            <div class="registrirajse">
                                <p>Nemate račun? Napravite ga <a href="register.php">ovdje</a></p>
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
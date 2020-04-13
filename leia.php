<!DOCTYPE html>
<html lang="en">

<head>
    <title>Leia</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
    <link rel="stylesheet" type="text/css" href="style.css" />
    <script src="js.js"></script>
</head>

<body>
    <div class="navbar">
        <a id="home" href="home.php">Hem</a>
        <div class="dropdown">
            <button id="thedogs" class="dropbtn" onclick="myFunction()">
                Våra hundar
            </button>
            <div class="dropdown-content" id="myDropdown">
                <a id="isor" href="isor.php">Isor</a>
                <a id="pandora" href="pandora.php">Pandora</a>
                <a id="allie" href="allie.php">Allie</a>
                <a id="titus" href="titus.php">Titus</a>
                <a id="atlaz" href="atlaz.php">Altaz</a>
                <a id="mina" href="mina.php">Mina</a>
                <a id="pepper" href="pepper.php">Pepper</a>
                <a id="zelda" href="zelda.php">Zelda</a>
                <a id="stella" href="stella.php">Stella</a>
                <a class="active" id="leia" href="leia.php">Leia</a>
                <a id="viggo" href="viggo.php">Viggo</a>
                <a id="enzo" href="enzo.php">Enzo</a>
            </div>
        </div>
        <a id="terms" href="terms.php">Adoptionsvillkor</a>
        <div class="dropdown">
            <button id="support" class="dropbtn" onclick="support()">
                Stöd oss
            </button>
            <div class="dropdown-content" id="myDropdown2">
                <a id="membership" href="membership.php">Medlemskap</a>
                <a id="donations" href="donations.php">Donationer</a>
            </div>
        </div>
        <a id="aboutus" href="about.php">Om oss</a>
        <a id="contactus" href="contact.php">Kontakt</a>
    </div>

    <div class="paper">
        <div class="rubrik-bakgrund">
            <h1 class="rubrik">Leia</h1>
        </div>

        <img class="description-pic" src="leia.jpg" alt="Leia">
        <p class="description-text">
            Ålder: 8 år <br>
            Ras: Malteserblandning <br>
            Kön: Hona <br>
            Fungerar med andra hundar: Ja <br>
            Fungerar med katter: Nej <br>
            Beskrivning: <br>
            Leia är cool och stabil och van vid det mesta. Hon brukar följa med sin husse till jobbet så hon är van vid
            att resa.
            Leia har bra självförtroende och är fin med alla människor, både stora och små. Hon besväras inte av trafik
            och kan bo i de flesta miljöer.
        </p>
    </div>
</body>

</html>
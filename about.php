<!DOCTYPE html>
<html lang="en">

<head>
    <title>Om oss</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
    <script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/2.0.0/jquery.min.js"></script>
    <link rel="stylesheet" type="text/css" href="style.css" />
    <script src="getID.js"></script>
    <script src="js.js"></script>
</head>

<body onload="loaded()">
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
                <a id="leia" href="leia.php">Leia</a>
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
        <a id="aboutus" class="active" href="about.php">Om oss</a>
        <a id="contactus" href="contact.php">Kontakt</a>
    </div>

    <div class="paper">
        <div class="rubrik-bakgrund">
            <h1 class="rubrik">Om oss</h1>
        </div>

        <p class="intro">
            Hundjouren är en ideell förening som bildades 2012 med ett mål –
            att rädda avlivningshotade hundar och ge dem en andra chans till ett lyckligt och kärleksfullt liv.
            Sedan vi startade har vi räddat tusentals hundar och hjälpt dem att hitta nya kärleksfulla hem.
            Vi ger varje hund en chans till ett nytt och bättre liv.
        </p>

        <img id="about" src="staff.jpg" alt="Dog and person">

        <p class="intro">
            Hundjourens uppgift är att ta emot och vårda hundar som inte längre kan vara hos sina mattar och hussar.
            Skälen till att hundarna hamnar på Hundjouren är många. Familjehunden som är på rymmen hamnar här efter att
            polisen har fångat in den.
            Ägarna till dessa hundar kommer oftast så fort de kan och hämtar ut sin vän.
            Familjesituationer kan också drastiskt förändras som t.ex. vid dödsfall eller sjukdom.
            Om hundägaren blir frihetsberövad kommer också hunden oftast till Hundjouren.
            Vidare kommer ett stort antal vanvårdade hundar in på Hundjouren vars ägare misskött dem.
            Sen har vi hundarna som dumpas när hundägaren av någon anledning tröttnat på dem.
            Har de tur och inte blir påkörda eller hungrar ihjäl så hittas de och kommer till oss på Hundjouren.
            Målet med verksamheten är att se till att utsatta hundar som hamnar på Hundjouren,
            oavsett anledning skall få det så bra som möjligt utifrån hundens förutsättningar och få ett nytt
            kärleksfullt hem.
        </p>

        <img id="about2" src="staff2.jpg" alt="Dog and person">

    </div>
</body>

</html>
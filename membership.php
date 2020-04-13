<!DOCTYPE html>
<html lang="en">

<head>
    <title>Medlemskap</title>
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
                <a class="active" id="membership" href="membership.php">Medlemskap</a>
                <a id="donations" href="donations.php">Donationer</a>
            </div>
        </div>
        <a id="aboutus" href="about.php">Om oss</a>
        <a id="contactus" href="contact.php">Kontakt</a>
    </div>

    <div class="paper">
        <div class="rubrik-bakgrund">
            <h1 class="rubrik">Medlemskap</h1>
        </div>

        <h3 class="rubrik-support">Hjälp oss att göra skillnad för bara 12.50 kr/mån*</h3>

        <img class="support" src="puppies-forest.jpg" alt="Puppies">

        <p class="intro">
            Hundjouren är beroende av frivilligt stöd för att kunna fortsätta arbeta för djuren.
            I gåvan ingår ditt medlemskap i Hundjouren och vetskapen att du är med och gör skillnad för djuren, varje
            dag!<br><br>

            Under 2019 räddade Hundjouren 391 hundar.
            Detta kan vi göra tack vare våra månadsgivare som kontinuerligt stödjer vår verksamhet.
            Vi räddar livet på minst 1 hund varje dag.
            Men varje dag avlivas också helt underbara hundar som vi skulle kunna rädda – om vi hade fler som stöttade
            vår verksamhet.<br><br>

            Bli månadsgivare idag! För endast 150kr/år kan du vara med och bidra till att fler hundar får det bättre
            ställt.<br><br>

            För att bli månadsgivare, vänligen fyll i formuläret nedan så hör vi av oss till Dig.
        </p>
        <div class="container">
            <form action="mailto:a17celal@student.his.se" method="post">
                <label>Namn</label>
                <input id="name" type="text" name="name" placeholder="Ditt namn..">

                <label>E-post</label>
                <input id="email" type="text" name="email" placeholder="Din e-post..">

                <label>Mobilnummer</label>
                <input id="phone" type="text" name="phone" placeholder="Ditt mobilnummer..">

                <label>Betalsätt:</label>
                <select id="payments" name="payments" form="paymentform">
                    <option id="autogiro" value="autogiro">Autogiro</option>
                    <option id="invoice" value="faktura">Faktura</option>
                    <option id="swish" value="swish">Swish</option>
                </select>
                <input id="submit" type="submit" value="Submit">
            </form>
        </div>
    </div>
</body>

</html>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Medlemskap</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
    <script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/2.0.0/jquery.min.js"></script>
    <link rel="stylesheet" type="text/css" href="style.css" />
    <script src="getID.js"></script>
</head>

<body onload="loaded()">
    <div class="sidenav">
        <a id="home" href="home.php">Hem</a>
        <button id="thedogs" class="dropdown-btn">Våra hundar
        </button>
        <div class="dropdown-container">
            <a id="allie" href="allie.php">Allie</a>
            <a id="atlaz" href="atlaz.php">Altaz</a>
            <a id="enzo" href="enzo.php">Enzo</a>
            <a id="isor" href="isor.php">Isor</a>
            <a id="leia" href="leia.php">Leia</a>
            <a id="mina" href="mina.php">Mina</a>
            <a id="pandora" href="pandora.php">Pandora</a>
            <a id="pepper" href="pepper.php">Pepper</a>
            <a id="stella" href="stella.php">Stella</a>
            <a id="titus" href="titus.php">Titus</a>
            <a id="viggo" href="viggo.php">Viggo</a>
            <a id="zelda" href="zelda.php">Zelda</a>
        </div>
        <a id="terms" href="terms.php">Adoptionsvillkor</a>
        <button id="support" class="dropdown-btn">Stöd oss
        </button>
        <div class="dropdown-container">
            <a style="background-color: #f9bfe5;" id="membership" href="membership.php">Medlemskap</a>
            <a id="donations" href="donations.php">Donationer</a>
        </div>
        <a id="aboutus" href="about.php">Om oss</a>
        <a id="contactus" href="contact.php">Kontakt</a>
    </div>

    <div class="paper">
        <div class="rubrik-bakgrund">
            <h1 class="rubrik">Medlemskap</h1>
        </div>

        <h3 class="rubrik-support">Hjälp oss att göra skillnad för bara 12.50 kr/mån*</h3>

        <img class="support" src="puppies-forest.jpg" alt="Puppies" />

        <p class="intro">
            Hundjouren är beroende av frivilligt stöd för att kunna fortsätta arbeta för djuren. I gåvan ingår ditt
            medlemskap i Hundjouren och vetskapen att du är med och gör skillnad för djuren, varje dag!<br /><br />

            Under 2019 räddade Hundjouren 391 hundar. Detta kan vi göra tack vare våra månadsgivare som kontinuerligt
            stödjer vår verksamhet. Vi räddar livet på minst 1 hund varje dag. Men varje dag avlivas också helt underbara
            hundar som vi skulle kunna rädda – om vi hade fler som stöttade vår verksamhet.<br /><br />

            Bli månadsgivare idag! För endast 150kr/år kan du vara med och bidra till att fler hundar får det bättre ställt.
        </p>

        <div class="container">
            <form action="mailto:a17celal@student.his.se" method="post">
                <label>Namn</label>
                <input id="name" type="text" name="name" placeholder="Ditt namn.." />

                <label>E-post</label>
                <input id="email" type="text" name="email" placeholder="Din e-post.." />

                <label>Mobilnummer</label>
                <input id="phone" type="text" name="phone" placeholder="Ditt mobilnummer.." />

                <label>Betalsätt:</label>
                <select id="payments" name="payments" form="paymentform">
                    <option id="autogiro" value="autogiro">Autogiro</option>
                    <option id="invoice" value="faktura">Faktura</option>
                    <option id="swish" value="swish">Swish</option>
                </select>

                <input id="submit" type="submit" value="Submit" />
            </form>
        </div>
    </div>

    <script>
        /* Loop through all dropdown buttons to toggle between hiding and showing its dropdown content.
        This allows the user to have multiple dropdowns without any conflict */
        var dropdown = document.getElementsByClassName("dropdown-btn");
        var i;

        for (i = 0; i < dropdown.length; i++) {
            dropdown[i].addEventListener("click", function() {
                this.classList.toggle("active");
                var dropdownContent = this.nextElementSibling;
                if (dropdownContent.style.display === "block") {
                    dropdownContent.style.display = "none";
                } else {
                    dropdownContent.style.display = "block";
                }
            });
        }
    </script>
</body>

</html>
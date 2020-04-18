<!DOCTYPE html>
<html lang="en">

<head>
    <title>Enzo</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
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
            <a style="background-color: #f9bfe5;" id="enzo" href="enzo.php">Enzo</a>
        </div>
        <a id="terms" href="terms.php">Adoptionsvillkor</a>
        <button id="support" class="dropdown-btn">Stöd oss
        </button>
        <div class="dropdown-container">
            <a id="membership" href="membership.php">Medlemskap</a>
            <a id="donations" href="donations.php">Donationer</a>
        </div>
        <a id="aboutus" href="about.php">Om oss</a>
        <a id="contactus" href="contact.php">Kontakt</a>
    </div>

    <div class="paper">
        <div class="rubrik-bakgrund">
            <h1 class="rubrik">Enzo</h1>
        </div>

        <img class="description-pic" src="enzo.jpg" alt="Enzo">
        <p class="description-text">
            Ålder: 7 år <br>
            Ras: Pomeranian chihuahua <br>
            Kön: Hane <br>
            Fungerar med andra hundar: Ja <br>
            Fungerar med katter: Nej <br>
            Här kommer Enzo en ljuvlig liten seniorkille på 10 kilo som söker ett lugnt hem.
            Enzo älskar sina långpromenader och är pigg och glad utomhus, i hundmöten vill han gärna hälsa och leka.
            Han delar gärna hem med en snäll hundkompis.
        </p>
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
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Donationer</title>
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
            <a id="enzo" href="enzo.php">Enzo</a>
        </div>
        <a id="terms" href="terms.php">Adoptionsvillkor</a>
        <button id="support" class="dropdown-btn">Stöd oss
        </button>
        <div class="dropdown-container">
            <a id="membership" href="membership.php">Medlemskap</a>
            <a style="background-color: #f9bfe5;" id="donations" href="donations.php">Donationer</a>
        </div>
        <a id="aboutus" href="about.php">Om oss</a>
        <a id="contactus" href="contact.php">Kontakt</a>
    </div>

    <div class="paper">
        <div class="rubrik-bakgrund">
            <h1 class="rubrik">Donationer</h1>
        </div>

        <h3 class="rubrik-support">Ge en gåva</h3>

        <img class="support" src="golden.jpg" alt="Dog">

        <p class="intro">
            Din gåva är viktig!
            Vi på Hundjouren är partipolitiskt obundna och arbetar för en värld där hundar respekteras som kännande individer med rätt till sina egna liv.
            Hundjouren är beroende av frivilligt stöd för att kunna hjälpa djuren. Det är alla medlemmar och givare som är Hundjouren.<br><br>

            Hundjouren är helt beroende av gåvor och medlemskap för att kunna hjälpa djuren.
            Ditt stöd gör vårt arbete möjligt. Våra insamlade medel går till allt som har med verksamheten att göra, men främst veterinärvård.
            Några exempel på våra kostnader är: röntgen 1 500 kr, ultraljud 1 500 kr, dra ut en tand 3 000 kr, vaccination 500 kr.<br><br>

            Sätt in din gåva på bankgiro- eller swishkontot nedan:<br>
            Swish: ******<br>
            Bankgiro: **** ****
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
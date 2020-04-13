<!DOCTYPE html>
<html lang="en">

<head>
    <title>Hundjouren</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
    <link rel="stylesheet" type="text/css" href="style.css" />
    <script src="js.js"></script>
</head>

<body>
    <div class="navbar">
        <a id="home" class="active" href="home.php">Hem</a>
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
        <a id="aboutus" href="about.php">Om oss</a>
        <a id="contactus" href="contact.php">Kontakt</a>
    </div>

    <div class="paper">
        <div class="rubrik-bakgrund">
            <h1 class="rubrik">Välkommen till adoptionsbyrån Hundjouren!</h1>
        </div>

        <img id="dogs" src="dogs.jpg" alt="Dogs">

        <p class="intro">
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum consequat blandit arcu, sed consequat
            dui
            fermentum sed. Nullam nec diam tortor. Morbi sodales, ante ac euismod feugiat, massa justo vulputate lectus,
            nec auctor arcu turpis vel eros. Curabitur vel scelerisque arcu, quis suscipit nunc. Aliquam vitae ipsum
            est.
            Vestibulum mattis pharetra eleifend. Maecenas interdum ullamcorper massa id congue. Fusce varius hendrerit
            mattis. Ut ac ex nibh. In ultrices tortor vitae sollicitudin imperdiet. Donec tristique tempus nibh, non
            ultricies metus. Aliquam erat volutpat. Proin velit mi, luctus a mi sed, commodo ullamcorper ante. Donec
            pulvinar erat at urna lobortis porttitor. Suspendisse commodo nunc augue, id molestie urna malesuada ac.
            Donec
            varius orci nec sollicitudin pharetra.
        </p>
    </div>
</body>

</html>
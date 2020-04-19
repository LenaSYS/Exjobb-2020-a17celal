<!DOCTYPE html>
<html lang="en">

<head>
    <title>Hundjouren</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
    <script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/2.0.0/jquery.min.js"></script>
    <link rel="stylesheet" type="text/css" href="style.css" />
    <script src="getID.js"></script>
</head>

<body onload="loaded()">

    <div class="sidenav">
        <a id="home" href="home.php">Hem</a>
        <a style="background-color: #f9bfe5;" id="thedogs" href="dogs.php">Våra hundar</a>
        <a id="terms" href="terms.php">Adoptionsvillkor</a>
        <a id="support" href="support.php">Stöd oss</a>
        <a id="aboutus" href="about.php">Om oss</a>
        <a id="contactus" href="contact.php">Kontakt</a>
    </div>

    <div class="paper">
        <div class="rubrik-bakgrund">
            <h1 class="rubrik">Våra hundar</h1>
        </div>

        <p class="intro">
            Detta är våra hundar som behöver nya hem. Klicka på respektive bild för att läsa mer om de olika hundarna.
        </p>

        <div class="row">
            <a href="puppies.php">
                <img id="thepuppies" class="dog" src="pandora-text.jpg" alt="Dog">
            </a>
            <a href="adults.php">
                <img id="adults" class="dog" src="mina-text.jpg" alt="Dog"> <br>
            </a>
            <a href="seniors.php">
                <img id="seniors" class="dog" src="viggo-text.jpg" alt="Dog">
            </a>
        </div>
    </div>
</body>

</html>
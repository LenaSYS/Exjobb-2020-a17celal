<!DOCTYPE html>
<html lang="en">

<head>
    <title>Kontakt</title>
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
            <a id="membership" href="membership.php">Medlemskap</a>
            <a id="donations" href="donations.php">Donationer</a>
        </div>
        <a id="aboutus" href="about.php">Om oss</a>
        <a style="background-color: #f9bfe5;" id="contactus" href="contact.php">Kontakt</a>
    </div>

    <div class="paper">
        <div class="rubrik-bakgrund">
            <h1 class="rubrik">Kontakt</h1>
        </div>

        <div id="contact">
            <h3>Adress</h3>
            <p class="contact">
                STOCKHOLM<br />
                Hundjouren<br />
                Åkeshovs Gårdsväg 10<br />
                168 38 BROMMA<br /><br />
            </p>

            <h3>E-post</h3>
            <p class="contact">info@hundjouren.se<br /><br /></p>

            <h3>Telefon</h3>
            <p class="contact">08 – 20 38 48<br /><br /></p>
        </div>

        <h3 id="rubrik-form">Kontaktformulär</h3>
        <div class="container">
            <form action="mailto:a17celal@student.his.se" method="post">
                <label>Namn</label>
                <input id="name2" type="text" name="name" placeholder="Ditt namn.." />

                <label>E-post</label>
                <input id="email2" type="text" name="email" placeholder="Din e-post.." />

                <label>Mobilnummer</label>
                <input id="phone2" type="text" name="phone" placeholder="Ditt mobilnummer.." />

                <label>Ämne</label>
                <textarea style="font-family: arial;" id="subject" name="subject" placeholder="Skriv någonting.."></textarea>

                <input id="submit2" type="submit" value="Submit" />
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
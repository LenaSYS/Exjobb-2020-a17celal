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
    <div class="navbar">
        <a id="home" href="home.php">Hem</a>
        <a id="thedogs" href="dogs.php">Våra hundar</a>
        <a id="terms" href="terms.php">Adoptionsvillkor</a>
        <a id="support" href="support.php">Stöd oss</a>
        <a id="aboutus" href="about.php">Om oss</a>
        <a class="active" id="contactus" href="contact.php">Kontakt</a>
    </div>

    <div class="paper">
        <div class="rubrik-bakgrund">
            <h1 class="rubrik">Kontakt</h1>
        </div>

        <div id="contact">
            <h3>Adress</h3>
            <p class="contact">
                STOCKHOLM<br>
                Hundjouren<br>
                Åkeshovs Gårdsväg 10<br>
                168 38 BROMMA<br><br>
            </p>

            <h3>E-post</h3>
            <p class="contact">
                info@hundjouren.se<br><br>
            </p>


            <h3>Telefon</h3>
            <p class="contact">
                08 – 20 38 48<br><br>
            </p>
        </div>

        <h3 class="form">Kontaktformulär</h3>
        <div class="container">
            <form action="mailto:a17celal@student.his.se" method="post">
                <label>Namn</label>
                <input id="name2" type="text" name="name" placeholder="Ditt namn..">

                <label>E-post</label>
                <input id="email2" type="text" name="email" placeholder="Din e-post..">

                <label>Mobilnummer</label>
                <input id="phone2" type="text" name="phone" placeholder="Ditt mobilnummer..">

                <label>Ämne</label>
                <textarea style="font-family: arial;" id="subject" name="subject" placeholder="Skriv någonting.."></textarea>

                <input id="submit2" type="submit" value="Submit">
            </form>
        </div>
    </div>
</body>

</html>
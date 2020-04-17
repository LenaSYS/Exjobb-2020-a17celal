<!DOCTYPE html>
<html lang="en">

<head>
  <title>Zelda</title>
  <meta charset="utf-8" />
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
        <a id="thepuppies" href="puppies.php">Valpar</a>
        <a class="active" id="adults" href="adults.php">Fullvuxna</a>
        <a id="seniors" href="seniors.php">Seniorer</a>
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
      <h1 class="rubrik">Zelda</h1>
    </div>

    <img class="description-pic" src="zelda.jpg" alt="Zelda">
    <p class="description-text">
      Ålder: 5 år <br>
      Ras: Pitbullterrier <br>
      Kön: Hona <br>
      Fungerar med andra hundar: Ja <br>
      Fungerar med katter: Ja <br>
      Beskrivning: <br>
      Här är helt underbara och vackra Zelda.
      En 5-årig tjej som hittades övergiven på gatan och nu har fått komma till ett rescue i väntan på att hitta en ny familj.
      Zelda är en vänlig själ som hälsar glatt på alla människor hon möter.
      Hon välkomnar också lyckligt allt det som livet har att erbjuda i form av leksaker, promenader och bus.
      Zelda är också smart och skulle säkert gärna vilja ägna sig åt roliga och kluriga aktiviteter.
    </p>
  </div>
</body>

</html>
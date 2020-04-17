<!DOCTYPE html>
<html lang="en">

<head>
  <title>Allie</title>
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
        <a class="active" id="thepuppies" href="puppies.php">Valpar</a>
        <a id="adults" href="adults.php">Fullvuxna</a>
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
      <h1 class="rubrik">Allie</h1>
    </div>

    <img class="description-pic" src="allie.jpg" alt="Allie">
    <p class="description-text">
      Ålder: 3 mån <br>
      Ras: Golden retriever <br>
      Kön: Hona <br>
      Fungerar med andra hundar: Ja <br>
      Fungerar med katter: Ja <br>
      Beskrivning: <br>
      Allie är en alldeles underbar liten valp som älskar barn och att gosa nära någon hon tycker om.
      Hon somnar gärna i en skön bädd och gärna framför en brasa.
      Till en början kan hon vara lite osäker i nya situationer, men hon anpassar sig snabbt.
      I jourhemmet får Allie socialiseras med andra hundar, katter och barn i de flesta åldrar.
      Alla som träffar underbara Allie faller pladask för henne!
    </p>
  </div>
</body>

</html>
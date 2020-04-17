<!DOCTYPE html>
<html lang="en">

<head>
  <title>Mina</title>
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
      <h1 class="rubrik">Mina</h1>
    </div>

    <img class="description-pic" src="mina.jpg" alt="Mina">
    <p class="description-text">
      Ålder: 4 år <br>
      Ras: Mops <br>
      Kön: Hona <br>
      Fungerar med andra hundar: Ja <br>
      Fungerar med katter: Ja <br>
      Beskrivning: <br>
      Mina är en liten tjej med stor personlighet.
      Hon verkligen älskar att stå i centrum och hennes jourhem beskriver henne som en liten charmig prinsessa!
      Hon är social, både mot människor och hundar och kommer bra överens med katter.
      Hon kan vara lite avvaktande mot stora hundar.
    </p>
  </div>
</body>

</html>
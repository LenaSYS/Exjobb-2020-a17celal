<!DOCTYPE html>
<html lang="en">

<head>
  <title>Stella</title>
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
        <a id="adults" href="adults.php">Fullvuxna</a>
        <a class="active" id="seniors" href="seniors.php">Seniorer</a>
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
      <h1 class="rubrik">Stella</h1>
    </div>

    <img class="description-pic" src="stella.jpg" alt="Stella">
    <p class="description-text">
      Ålder: 10 år <br>
      Ras: Labradoodle <br>
      Kön: Hona <br>
      Fungerar med andra hundar: Ja <br>
      Fungerar med katter: Ja <br>
      Beskrivning: <br>
      Stella älskar att komma ut på sköna promenader och är väldigt förtjust i mat, och älskar belöningar!
      Hon är otroligt trevlig att ha omkring sig och hon funkar bra ihop med lite äldre barn.
      Hon åker bra i bil och skulle passa bra i ett lite lugnare område hos en hundvan familj.
    </p>
  </div>
</body>

</html>
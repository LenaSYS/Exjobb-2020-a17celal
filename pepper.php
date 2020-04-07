<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Pepper</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
    <link rel="stylesheet" type="text/css" href="style.css" />
    <script src="js.js"></script>
  </head>

  <body>
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
          <h1 class="rubrik">Pepper</h1>
        </div>

        <img class="description-pic" src="pepper.jpg" alt="Pepper">
        <p class="description-text">
          Ålder: 2 år <br>
          Ras: Siberian husky <br>
          Kön: Hane <br>
          Fungerar med andra hundar: Ja <br>
          Fungerar med katter: Nej <br>
          Beskrivning: <br>
          Här kommer Pepper, en glad och stilig kille med mycket energi.
          Han är kärleksfull och älskar att umgås med såväl människor och andra hundar,
          men han gillar även att gå iväg för att vara för sig själv emellanåt. 
          Pepper är en smart och social hund som tycker mycket om att hänga med på olika
          aktiviteter, långpromenader, nosarbete, bus med hundkompisar och spring eller cykelturer i skog och mark passar honom utmärkt.
        </p>
      </div>
  </body>
</html>

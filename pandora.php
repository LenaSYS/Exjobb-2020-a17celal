<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Pandora</title>
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
          <h1 class="rubrik">Pandora</h1>
        </div>

        <img class="description-pic" src="pandora.jpg" alt="Pandora">
        <p class="description-text">
          Ålder: 5 mån <br>
          Ras: Landseer/golden retriever/tollare/siberian husky <br>
          Kön: Hona <br>
          Fungerar med andra hundar: Ja <br>
          Fungerar med katter: Ja <br>
          Beskrivning: <br>
          Pandora hittades övergiven ute mitt i vintern. Hon togs till ett rescue och nu bor hon i ett jourhem.
          Pandora är en kärleksfull ung liten tjej som trivs jättebra med andra hundar och funkar bra med katter.
          I jourhemmet så lär hon sig bra grundläggande kunskaper.
        </p>
      </div>
  </body>
</html>

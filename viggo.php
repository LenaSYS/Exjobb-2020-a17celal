<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Viggo</title>
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
          <h1 class="rubrik">Viggo</h1>
        </div>

        <img class="description-pic" src="viggo.jpg" alt="Viggo">
        <p class="description-text">
          Ålder: 7 år <br>
          Ras: Labrador retriever <br>
          Kön: Hane <br>
          Fungerar med andra hundar: Ja <br>
          Fungerar med katter: Ja <br>
          Viggo vet hur man njuter av livet!
          Han är glad och full av energi och när man träffar honom skulle man aldrig gissa på att han är 7 år!
          Han älskar långa promenader och springer gärna lös på något lämpligt ställe så han kan få göra sina glädjerus.
          Viggo tycker om att träna och samarbeta för belöning och skulle uppskatta någon form av lydnads- eller trixträning i sitt nya hem.
        </p>
      </div>
  </body>
</html>

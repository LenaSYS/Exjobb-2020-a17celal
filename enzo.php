<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Enzo</title>
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
          <h1 class="rubrik">Enzo</h1>
        </div>

        <img class="description-pic" src="enzo.jpg" alt="Enzo">
        <p class="description-text">
          Ålder: 7 år <br>
          Ras: Pomeranian chihuahua <br>
          Kön: Hane <br>
          Fungerar med andra hundar: Ja <br>
          Fungerar med katter: Nej <br>
          Här kommer Enzo en ljuvlig liten seniorkille på 10 kilo som söker ett lugnt hem.
          Enzo älskar sina  långpromenader och är pigg och glad utomhus, i hundmöten vill han gärna hälsa och leka.
          Han delar gärna hem med en snäll hundkompis.
        </p>
      </div>
  </body>
</html>

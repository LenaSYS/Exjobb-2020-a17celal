<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Titus</title>
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
          <h1 class="rubrik">Titus</h1>
        </div>

        <img class="description-pic" src="titus.jpg" alt="Pandora">
        <p class="description-text">
          Ålder: 3 mån <br>
          Ras: Welsh corgi pembroke <br>
          Kön: Hane <br>
          Fungerar med andra hundar: Nej <br>
          Fungerar med katter: Okänt <br>
          Beskrivning: <br>
          Titus är bara 3 månader men har redan flyttat flera gånger för att sedan bli övergiven.
          Trots sin röriga bakgrund är han en glad och lekfull kille vars största problem i livet verkar vara vilken leksak han ska välja att leka med.
          Alla som träffar Titus faller för hans charm och påhitt och den familj som adopterar honom kommer inte att få tråkigt. 
        </p>
      </div>
  </body>
</html>

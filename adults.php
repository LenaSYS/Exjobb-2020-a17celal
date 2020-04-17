<!DOCTYPE html>
<html lang="en">

<head>
  <title>Fullvuxna</title>
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
      <h1 class="rubrik">Våra fullvuxna hundar</h1>
    </div>
    <p class="intro">
      Detta är våra fullvuxna hundar som behöver nya hem. <br> <br>
      Klicka på någon av bilderna nedan för att läsa mer om just den hunden.
    </p>

    <div class="row">
      <a href="atlaz.php">
        <img id="atlaz" class="dog" src="atlaz.jpg" alt="Dog">
      </a>
      <a href="mina.php">
        <img id="mina" class="dog" src="mina.jpg" alt="Dog"> <br>
      </a>
      <a href="pepper.php">
        <img id="pepper" class="dog" src="pepper.jpg" alt="Dog">
      </a>
      <a href="zelda.php">
        <img id="zelda" class="dog" src="zelda.jpg" alt="Dog">
      </a>
    </div>
  </div>
</body>

</html>
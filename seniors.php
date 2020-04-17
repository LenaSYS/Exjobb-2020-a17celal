<!DOCTYPE html>
<html lang="en">

<head>
  <title>Seniorer</title>
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
      <h1 class="rubrik">Våra senior hundar</h1>
    </div>
    <p class="intro">
      Detta är våra senior hundar som behöver nya hem. <br> <br>
      Klicka på någon av bilderna nedan för att läsa mer om just den hunden.
    </p>

    <div class="row">
      <a href="stella.php">
        <img id="stella" class="dog" src="stella.jpg" alt="Senior dog">
      </a>
      <a href="leia.php">
        <img id="leia" class="dog" src="leia.jpg" alt="Senior dog"> <br>
      </a>
      <a href="viggo.php">
        <img id="viggo" class="dog" src="viggo.jpg" alt="Senior dog">
      </a>
      <a href="enzo.php">
        <img id="enzo" class="dog" src="enzo.jpg" alt="Senior dog">
      </a>
    </div>
  </div>
</body>

</html>
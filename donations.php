<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Donationer</title>
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
          <a class="active" id="donations" href="donations.php">Donationer</a>
        </div>
      </div>
      <a id="aboutus" href="about.php">Om oss</a>
      <a id="contactus" href="contact.php">Kontakt</a>
    </div>

      <div class="paper">
        <div class="rubrik-bakgrund">
          <h1 class="rubrik">Donationer</h1>
        </div>

        <h3 class="rubrik-support">Ge en gåva</h3>

        <img class="support" src="golden.jpg" alt="Dog">

        <p class="intro">
          Din gåva är viktig!
          Vi på Hundjouren är partipolitiskt obundna och arbetar för en värld där hundar respekteras som kännande individer med rätt till sina egna liv.
          Hundjouren är beroende av frivilligt stöd för att kunna hjälpa djuren. Det är alla medlemmar och givare som är Hundjouren.<br><br>

          Hundjouren är helt beroende av gåvor och medlemskap för att kunna hjälpa djuren.
          Ditt stöd gör vårt arbete möjligt. Våra insamlade medel går till allt som har med verksamheten att göra, men främst veterinärvård.
          Några exempel på våra kostnader är: röntgen 1 500 kr, ultraljud 1 500 kr, dra ut en tand 3 000 kr, vaccination 500 kr.<br><br>

          Sätt in din gåva på bankgiro- eller swishkontot nedan:<br>
          Swish: ******<br>
          Bankgiro: **** ****
        </p>
      </div>
  </body>
</html>

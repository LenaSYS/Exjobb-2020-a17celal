<!DOCTYPE html>
<html lang="en">

<head>
  <title>Adoptionsvillkor</title>
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
        <a id="seniors" href="seniors.php">Seniorer</a>
      </div>
    </div>
    <a class="active" id="terms" href="terms.php">Adoptionsvillkor</a>
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
      <h1 class="rubrik">Villkor för att adoptera en hund från oss</h1>
    </div>

    <ul>
      <li>Vid adoption skriver vi alltid ett adoptionsavtal.</li>
      <li>Är du under 18 år måste du ha målsmans tillstånd.</li>
      <li>Du förbinder dig att ta väl hand om djuret och tillgodose dess behov.</li>
      <li>Djur får inte gå i avel. Det finns tillräckligt med djur som saknar hem…</li>
      <li>Vid eventuell sjukdom eller skada ska du konsultera eller uppsöka veterinär.</li>
      <li>Djur får inte placeras till ett nytt hem. Om djuret inte kan bo kvar ska hen återgå till Hundjouren. Djuret får ej avlivas utan att Hundjouren blivit kontaktade.</li>
      <li>Om du byter adress, telefonnummer, eller e-post ska du kontakta oss på Hundjouren så vi vet var vi kan nå dig.</li>
      <li>Missköts djuret eller om villkoren i kontraktet bryts, hävs kontraktet och djuret går direkt tillbaka till Hundjouren.</li>
      <li>Vi kan komma att göra hembesök.</li>
    </ul>

    <img id="puppies" src="puppies.jpg" alt="Puppies">

  </div>
</body>

</html>
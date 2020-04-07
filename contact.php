<!DOCTYPE html>
<html lang="en">

<head>
  <title>Kontakt</title>
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
        <a id="donations" href="donations.php">Donationer</a>
      </div>
    </div>
    <a id="aboutus" href="about.php">Om oss</a>
    <a class="active" id="contactus" href="contact.php">Kontakt</a>
  </div>

  <div class="paper">
    <div class="rubrik-bakgrund">
      <h1 class="rubrik">Kontakt</h1>
    </div>

    <div id="contact">
      <h3>Adress</h3>
      <p class="contact">
        STOCKHOLM<br>
        Hundjouren<br>
        Åkeshovs Gårdsväg 10<br>
        168 38 BROMMA<br><br>
      </p>

      <h3>E-post</h3>
      <p class="contact">
        info@hundjouren.se<br><br>
      </p>


      <h3>Telefon</h3>
      <p class="contact">
        08 – 20 38 48<br><br>
      </p>
    </div>

    <h3 id="rubrik-form">Kontaktformulär</h3>
    <div class="container">
      <form action="mailto:a17celal@student.his.se" method="post">
        <label>Namn</label>
        <input type="text" name="name" placeholder="Ditt namn..">

        <label>E-post</label>
        <input type="text" name="email" placeholder="Din e-post..">

        <label>Mobilnummer</label>
        <input type="text" name="phone" placeholder="Ditt mobilnummer..">

        <label>Ämne</label>
        <textarea style="font-family: arial;" id="subject" name="subject" placeholder="Skriv någonting.."></textarea>

        <input type="submit" value="Submit">
      </form>
    </div>
  </div>
</body>

</html>
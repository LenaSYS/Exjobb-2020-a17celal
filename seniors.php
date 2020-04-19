<!DOCTYPE html>
<html lang="en">

<head>
    <title>Seniorer</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/2.0.0/jquery.min.js"></script>
    <link rel="stylesheet" type="text/css" href="style.css" />
    <script src="getID.js"></script>
</head>

<body onload="loaded()">
    <div class="sidenav">
        <a id="home" href="home.php">Hem</a>
        <button id="thedogs" class="dropdown-btn">Våra hundar
        </button>
        <div class="dropdown-container">
            <a id="thepuppies" href="puppies.php">Valpar</a>
            <a id="adults" href="adults.php">Fullvuxna</a>
            <a style="background-color: #f9bfe5;" id="seniors" href="seniors.php">Seniorer</a>
        </div>
        <a id="terms" href="terms.php">Adoptionsvillkor</a>
        <button id="support" class="dropdown-btn">Stöd oss
        </button>
        <div class="dropdown-container">
            <a id="membership" href="membership.php">Medlemskap</a>
            <a id="donations" href="donations.php">Donationer</a>
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

    <script>
        /* Loop through all dropdown buttons to toggle between hiding and showing its dropdown content.
        This allows the user to have multiple dropdowns without any conflict */
        var dropdown = document.getElementsByClassName("dropdown-btn");
        var i;

        for (i = 0; i < dropdown.length; i++) {
            dropdown[i].addEventListener("click", function() {
                this.classList.toggle("active");
                var dropdownContent = this.nextElementSibling;
                if (dropdownContent.style.display === "block") {
                    dropdownContent.style.display = "none";
                } else {
                    dropdownContent.style.display = "block";
                }
            });
        }
    </script>
</body>

</html>
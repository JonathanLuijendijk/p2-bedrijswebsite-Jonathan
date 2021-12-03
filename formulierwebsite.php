<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>formulier</title>
    <link rel="stylesheet" type="text/css" href="styles.css">
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<header class="banner">
        <img src="image/logo.jpg" alt="ShabutoGo" width="200" height="200" style="max-width:100%;height:auto;">
        <?php   include 'navigatie.html';   ?>
    </header>
    
    <main>
        <section>
            <article>
            <img src="image/314342a3-0868-411d-812e-18f6091b12a1.png" alt="werknemers">
            <h1>Website Review</h1>
            <p>U kunt ons hier laten weten wat u van de website vind en wat er beter/anders kan aan de website.</p>

            <br>

            <form action="" method="post">
  <label for="fname">Voornaam:</label><br>
  <input type="text" id="voornaam" name="voornaam"><br>
  <label for="lname">Achternaam:</label><br>
  <input type="text" id="achternaam" name="achternaam">

  <br><label for="fname">E-Mail:</label>
  <br><input type="text" id="E-Mail" name="E-Mail">

  <br><label for="fname">Postcode:</label>
  <br><input type="text" id="Postcode" name="Postcode">

  <br>

  <br><label>Geslacht:</label> 
  <select id="Geslacht" name="Geslacht">
  <option value="man">Man</option>
  <option value="vrouw">Vrouw</option>
  <option value="ia">Iets anders</option>
  <option value="ziln">Zeg ik liever niet</option>
</select>
  <!-- <br><input type="radio" name="geslacht" value="Man"> Man
  <input type="radio" name="geslacht" value="Vrouw"> Vrouw <br> -->

  <br>

  <br><label>Wat is goed aan de website?:</label>
  <br><textarea name="g"></textarea>

  <br><label>Wat is niet goed aan de website?:</label>
  <br><textarea name="ng"></textarea>

  <br><label>Wat kan er beter aan de website?:</label>
  <br><textarea name="wkeb"></textarea>

  <br><label>Anders namelijk:</label>
  <br><textarea name="an"></textarea>

  <br><label>Staan alle producten goed op de pagina's?:</label>
  <br>
  <select id="keuze" name="keuze">
  <option value="Ja">Ja</option>
  <option value="Nee">Nee</option>
  </select>
  <br><label>Bij 'nee' graag uitleg wat er niet goed aan is:</label>
  <br><textarea name="waarom"></textarea>

  <br><label>Is alles goed leesbaar?:</label>
  <br>
  <select id="keuze" name="keuze">
  <option value="Ja">Ja</option>
  <option value="Nee">Nee</option>
  </select>
  <br><label>Bij 'nee' graag uitleg wat er niet goed aan is:</label>
  <br><textarea name="waarom"></textarea>

  <br><label>Staat alles duidelijk op de website?:</label>
  <br>
  <select id="keuze" name="keuze">
  <option value="Ja">Ja</option>
  <option value="Nee">Nee</option>
  </select>
  <br><label>Bij 'nee' graag uitleg wat er niet goed aan is:</label>
  <br><textarea name="waarom"></textarea>

  <br><label>Is alles overzichtelijk?:</label>
  <br>
  <select id="keuze" name="keuze">
  <option value="Ja">Ja</option>
  <option value="Nee">Nee</option>
  </select>
  <br><label>Bij 'nee' graag uitleg wat er niet goed aan is:</label>
  <br><textarea name="waarom"></textarea>

  <br>

  <br><label>Cijfer Website:</label>
  <select id="Cijfer" name="Cijfer">
  <option value="1">1</option>
  <option value="2">2</option>
  <option value="3">3</option>
  <option value="4">4</option>
  <option value="5">5</option>
  <option value="6">6</option>
  <option value="7">7</option>
  <option value="8">8</option>
  <option value="9">9</option>
  <option value="10">10</option>
</select>
  <!-- <br><input type="radio" name="cijfer" value="1"> 1
  <br><input type="radio" name="cijfer" value="2"> 2
  <br><input type="radio" name="cijfer" value="3"> 3
  <br><input type="radio" name="cijfer" value="4"> 4
  <br><input type="radio" name="cijfer" value="5"> 5 -->

  <br>

  <br><input type="submit" name="verzenden" value="verzenden">
</form>

<br>

<?php
if(isset($_POST['verzenden'])){
    echo 'Het formulier is verzonden naar Shabu To Go!';
}
?>
            </article>
        </section>

        <footer>
            <p><i>Nieuwsstraat 210<br>
                    3201 EE<br>
                    Spijkenisse</i>
            </p>
        </footer>
    </main>
</body>
</html>
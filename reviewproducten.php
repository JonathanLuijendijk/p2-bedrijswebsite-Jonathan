<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Review over de producten</title>
    <link rel="stylesheet" type="text/css" href="styles.css">
    <link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
    <header class="banner">
        <img src="image/logo.jpg" alt="logo" width="200" height="200">
        <?php include 'navigatie.html'; ?>
    </header>



    <main>
        <section>
            <article>

                <img src="image/314342a3-0868-411d-812e-18f6091b12a1.png" alt="werknemers" class="responsive">

                <!-- /*Here begins the form with a working php.*/ -->
                   <form method="post" action="">
                    <h1>Aanvraag formulier catering</h1>
                    <p>Bent u benieuwd naar de mogelijkheden van onze sushi catering of wilt u direct uw catering
                        bestellen?<br>
                        Neem dan direct contact met ons op via het onderstaande contactformulier: *Verplichte velden</p>
                    <br>
                    <?php if(isset($_POST['verzenden'])) {
                        $aanhef=$_POST['aanhef'];
                        $naam=$_POST['naam'];
                        $email=$_POST['email'];
                        $telefoonnummer=$_POST['telefoonnummer'];
                        $onderwerp=$_POST['onderwerp'];
                        $ster=$_POST['ster'];
                        $product=$_POST['product'];
                        $saus=$_POST['saus'];
                        $nieuw=$_POST['nieuw'];
                        $keuze=$_POST['keuze'];
                        $bericht=$_POST['bericht'];

                        echo "Het formulier is verzonden!<br>";
                        echo "Naam: ". $aanhef . " ". $naam . "<br>";
                        echo "Email: ". $email . " ". "<br>";
                        echo "Telefoonnummer: ". $telefoonnummer . " ". "<br>";
                        echo "Onderwerp: ". $onderwerp . " ". "<br>";
                        echo "Tevredenheid: ". $ster . " ". "<br>";
                        echo "Lekkerste gerecht: ". $product . " ". "<br>";
                        echo "Lekkerste saus: ". $saus . " ". "<br>";
                        echo "Beste Side Dish: ". $nieuw ." ". "<br>";
                        echo "Mensen aanraden: ". $keuze ." ". "<br>";
                        echo "Bericht: ". $bericht . "<br><br><br>";

                    }

                    else {
                        $aanhef="";
                        $naam="";
                        $email="";
                        $telefoonnummer="";
                        $onderwerp="";
                        $ster="";
                        $product="";
                        $saus="";
                        $nieuw="";
                        $keuze="";
                        $bericht="";
                    }

                    ?>

                    <!-- /*The form for the working php*/ -->

                    <label class="label">*Aanhef</label><br><br>
                    <input required type="radio" class="input" name="aanhef" value="dhr">Dhr.<br>
                    <input required type="radio" class="input" name="aanhef" value="mevr">Mevr.<br>

                    <br>

                    <label class="label">*Naam</label><br><br>
                    <input required type="text" name="naam" value="<?php echo $naam; ?>">
                    <br>
                    <label for="Email" class="label">*Email:</label><br><br>
                    <input required type="text" name="email" value="<?php echo $email; ?>">
                    <br>
                    <label for="Telefoon nummer" class="label">*Telefoonnummer:</label><br><br>
                    <input required type="text" name="telefoonnummer" value="<?php echo $telefoonnummer; ?>">
                    <br>
                    <label for="Onderwerp" class="label">*Onderwerp:</label><br><br>
                    <input required type="text" name="onderwerp" value="<?php echo $onderwerp; ?>">
                    <br>

                    <label>*Hoeveel sterren geven jullie aan onze producten?</label><br>
                    <input required type="radio" name="ster" value="1">1<br>
                    <input required type="radio" name="ster" value="2">2<br>
                    <input required type="radio" name="ster" value="3">3<br>
                    <input required type="radio" name="ster" value="4">4<br>
                    <input required type="radio" name="ster" value="5">5<br>
                    <br>
                    <br>
                    <label>*Wat vindt u het lekkerst van onze producten?</label><br>
                    <input required type="radio" name="product" value="Sushi">Sushi<br>
                    <input required type="radio" name="product" value="Nigiri">Nigiri<br>
                    <input required type="radio" name="product" value="Boxes">Boxes<br>
                    <input required type="radio" name="product" value="Poke Bowls">Poke Bowls<br>
                    <input required type="radio" name="product" value="Side Dishes">Side Dishes<br>
                    <br>
                    <br>
                    <label>*Welke sauzes vind u het lekkerst?</label><br>
                    <input required type="radio" name="saus" value="Wasabi">Wasabi<br>
                    <input required type="radio" name="saus" value="Soyasaus">Soyasaus<br>
                    <br>
                    <br>
                    <label>*Welk nieuwe Side dishes zullen wij toevoegen?</label><br>
                    <input required type="radio" name="nieuw" value="Japanese Chilled Tofu Hiyayakko">Japanese Chilled Tofu (Hiyayakko)<br>
                    <input required type="radio" name="nieuw" value="Japanese Rice Balls Onigiri">Japanese Rice Balls (Onigiri)<br>
                    <input required type="radio" name="nieuw" value="Sabogaki">Sabogaki<br>
                    <input required type="radio" name="nieuw" value="Agedashi tofu">Agedashi tofu<br>
                    <br>
                    <br>
                    <label>*Zal je mensen aanraden over Shabu to go?</label><br>
                    <input required type="radio" name="keuze" value="Ja">Ja<br>
                    <input required type="radio" name="keuze" value="Nee">Nee<br>
                    <br>
                    <br>
                    <label>*Bericht</label><br>
                    <textarea name="bericht" cols="40" rows="5" placeholder= "Type hier uw reactie wat u van ons producten vind."><?php echo $bericht; ?></textarea><br>
                    <input type="submit" name="verzenden" value="verzenden">
                </form>
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
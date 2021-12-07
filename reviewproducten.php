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

                <img src="image/314342a3-0868-411d-812e-18f6091b12a1.png" alt="werknemers">

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
                        $bericht=$_POST['bericht'];

                        echo "Het formulier is verzonden!<br>";
                        echo "Naam: ". $aanhef . " ". $naam . "<br>";
                        echo "Email: ". $email . " ". "<br>";
                        echo "Telefoonnummer: ". $telefoonnummer . " ". "<br>";
                        echo "Onderwerp: ". $onderwerp . " ". "<br>";
                        echo "Tevredenheid: ". $ster . " ". "<br>";
                        echo "Lekkerste gerecht: ". $product . " ". "<br>";
                        echo "Lekkerste saus: ". $saus . " ". "<br>";
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
                        $bericht="";
                    }

                    ?>

                    <!-- /*The form for the working php*/ -->

                    <label class="label">*Aanhef</label>
                    <input required type="radio" class="input" name="aanhef" value="dhr">Dhr.
                    <input required type="radio" class="input" name="aanhef" value="mevr">Mevr.

                    <br>

                    <label class="label">*Naam</label>
                    <input required type="text" name="naam" value="<?php echo $naam; ?>">
                    <br>
                    <label for="Email" class="label">*Email:</label>
                    <input required type="text" name="email" value="<?php echo $email; ?>">
                    <br>
                    <label for="Telefoon nummer" class="label">*Telefoonnummer:</label>
                    <input required type="text" name="telefoonnummer" value="<?php echo $telefoonnummer; ?>">
                    <br>
                    <label for="Onderwerp" class="label">*Onderwerp:</label>
                    <input required type="text" name="onderwerp" value="<?php echo $onderwerp; ?>">
                    <br>

                    <label class="label">*Hoeveel sterren geven jullie aan onze producten?</label><br>
                    <input required type="radio" name="ster" value="1">1
                    <input required type="radio" name="ster" value="2">2
                    <input required type="radio" name="ster" value="3">3
                    <input required type="radio" name="ster" value="4">4
                    <input required type="radio" name="ster" value="5">5
                    <br>
                    <br>
                    <br>
                    <label class="label">*Wat vindt u het lekkerst van onze producten?</label><br>
                    <input required type="radio" name="product" value="Sushi">Sushi
                    <input required type="radio" name="product" value="Nigiri">Nigiri
                    <input required type="radio" name="product" value="Boxes">Boxes
                    <input required type="radio" name="product" value="Poke Bowls">Poke Bowls
                    <input required type="radio" name="product" value="Side Dishes">Side Dishes
                    <br>
                    <br>
                    <br>
                    <label class="label">*Welke sauzes vind u het lekkerst?</label>
                    <input required type="radio" name="saus" value="Wasabi">Wasabi
                    <input required type="radio" name="saus" value="Soyasaus">Soyasaus
                    <br>
                    <br>
                    <br>
                    <label class="label">*Bericht</label>
                    <textarea name="bericht" cols="40" rows="5" placeholder= "Type hier uw reactie wat u van ons producten vind."><?php echo $bericht; ?></textarea>


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
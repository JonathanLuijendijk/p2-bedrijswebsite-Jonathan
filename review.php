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
                <h1>Review plaatsen</h1>
                <p>heeft uw een goeie of slechte ervaring gehad met ShabuToGo? <br>
                   Wij willen het graag horen vul hier uw review in.</p>

                   <?php if(isset($_POST['verzenden'])) {
                        $voornaam=$_POST['voornaam'];
                        $achternaam=$_POST['achternaam'];
                        $email=$_POST['email'];
                        $postcode=$_POST['postcode'];
                        $persoon=$_POST['persoon'];
                        $descriptie=$_POST['descriptie'];
                        $review=$_POST['review'];

                        echo "Bedankt voor uw feedback!<br>";
                        echo "Naam: ". $voornaam . " ". $achternaam . "<br>";
                        echo "Email: ". $email . " ". "<br>";
                        echo "Postcode: ". $postcode . " ". "<br>";
                        echo "Positie: ". $persoon . " ". "<br>";
                        echo "Descriptie: ". $descriptie . " ". "<br>";
                        echo "Review: ". $review . " ". "<br>";
                    }

                    else {
                        $voornaam="";
                        $achternaam="";
                        $email="";
                        $postcode="";
                        $persoon="";
                        $descriptie="";
                        $review="";
                    }

                    ?>

                
                <form action="" method="post"><br>
                <label for="voornaam">*voornaam:</label><br>
                    <input required type="text" name="voornaam" placeholder="Type hier uw voornaam"><br>
                <label for="achternaam">*achternaam:</label><br>
                    <input required type="text" name="achternaam" placeholder="Type hier uw achternaam"><br>
                <label for="email">*email:</label><br>
                    <input required type="text" name="email" placeholder="Type hier uw email"><br>
                <label for="postcode">*postcode:</label><br>
                    <input required type="text" name="postcode" placeholder="Type hier uw postcode">
                <legend>Over wie zou uw een opmerking will sturen:</legend>
                    <select required name="persoon">
                        <option value="">Kies hier een Review optie</option>
                        <option value="Werknemer">Werknemer</option>
                        <option value="Werkgever">Werkgever</option>
                    </select><br>
                <label for="descriptie">Als uw de naam heeft van deze persoon shrijf deze hieronder:</label><br>
                    <input required type="text" name="descriptie" placeholder="Type het hier"><br>
                <label for="checkbox"></label>
                        <legend>Hier kunt uw een Opmerking schrijven over deze persoon:</legend>
                    <textarea cols="40" rows="10" name="review" id="review"
                        required placeholder="Type hier wat u van ons website vind en wat er beter kan."></textarea><br>
                        <label for="checkbox"></label>
                <fieldset>
                    <legend name="cijfer">Cijfer:</legend>
                    <label for="opt1"><input type="radio"> 1* </label>
                    <label for="opt2"><input type="radio"> 2* </label>
                    <label for="opt3"><input type="radio"> 3* </label>
                    <label for="opt4"><input type="radio"> 4* </label>
                    <label for="opt5"><input type="radio"> 5* </label>
                </fieldset>
                        
            </article>
        </section>

        <section>
            <article>
                <legend> Alles ingevuld </legend>
                <input type="submit" name="verzenden" value="verzenden">

            </article>
        </section>
        </form>


        <footer>
            <p><i>Nieuwsstraat 210<br>
                    3201 EE<br>
                    Spijkenisse</i>
            </p>
        </footer>
    </main>

</body>

</html>
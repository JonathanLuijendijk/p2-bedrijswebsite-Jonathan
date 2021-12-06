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

                
                <form method="post" action="reactiepost.html"><br>
                <label for="Naam">*Naam:</label><br>
                    <input required type="text" name="voornaam" placeholder="Type hier uw naam"><br>
                <label for="Email">*Email:</label><br>
                    <input required type="text" name="Email" placeholder="Type hier uw Email"><br>
                <legend>Waarover wilt uw een review plaatsen</legend>
                    <select required name="beste">
                        <option value="">Kies hier een Review optie</option>
                        <option value="AB">Product</option>
                        <option value="BC">Service</option>
                        <option value="CD">Medewerkers</option>
                        <option value="DE">Website</option>
                    </select><br>
                <label for="Product">Als uw Product heeft gekozen schrijf hier welke,anders shrijf N.V.T</label><br>
                    <input required type="text" name="Product" placeholder="Type hier Het Product"><br>
                <label for="checkbox"></label>
                        <legend>Review:</legend>
                    <textarea cols="40" rows="10" name="review" id="review"
                        required placeholder="Type hier wat u van ons website vind en wat er beter kan."></textarea><br>
                        <label for="checkbox"></label>
                <fieldset>
                    <legend>Hoeveel Sterren</legend>
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
                <input type="submit" id="submit" name="submit" value="submit">
                <input type="reset" id="reset" name="reset" value="reset">

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
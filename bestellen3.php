<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bestellen</title>
    <link rel="stylesheet" type="text/css" href="styles.css">
    <link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
    <header class="banner">
        <img src="image/logo.jpg" alt="logo" height="200" width="200">
        <?php include 'navigatie.html'; ?>
    </header>

    <main>
        <section>
            <article>
                <img src="image/6c2065f3-8020-4f51-ac6d-50d81ffdc8c2.png" alt="sushi">
                <h1>Bestellen</h1>
                <p>Bestel hier de gerechten.</p>
                <h2>Voordeel Boxes</h2>
            </article>
        </section>

        <?php include 'button.html'; ?>

        <section class="container">
            <article class="container">
                <ul>
                    <img src="image/SalmonBox.png" alt="sushi">
                    <p class="parent">Salmon Box 16 stuks</p>
                    <button type="button" class="button button3">+ €16,00</button>
                </ul>
                <ul>
                    <img src="image/TunaBox.png" alt="sushi">
                    <p class="parent">Tuna Nigiri 16 stuks</p>
                    <button type="button" class="button button3">+ €16,50</button>
                </ul>
                <ul>
                    <img src="image/LittleBox.png" alt="sushi">
                    <p class="parent">Little Box 19 stuks</p>
                    <button type="button" class="button button3">+ €17,20</button>
                </ul>
            </article>
        </section>

        <section class="container">
            <article class="container">
                <ul>
                    <img src="image/SalmonEbiBox.png" alt="sushi">
                    <p class="parent">Salmon Ebi Box 17 stuks</p>
                    <button type="button" class="button button3">+ €19,60</button>
                </ul>
                <ul>
                    <img src="image/VeggieBox.png" alt="sushi">
                    <p class="parent">Veggie Box 21 stuks</p>
                    <button type="button" class="button button3">+ €16,30</button>
                </ul>
                <ul>
                    <img src="image/CrunchyBox.png" alt="sushi">
                    <p class="parent">Crunchy Box 20 stuks</p>
                    <button type="button" class="button button3">+ €26,60</button>
                </ul>
            </article>
        </section>

        <section class="container">
            <article class="container">
                <ul>
                    <img src="image/VarietyBox.png" alt="sushi">
                    <p class="parent">Variety Box 22 stuks</p>
                    <button type="button" class="button button3">+ €24,50</button>
                </ul>
                <ul>
                    <img src="image/SalmonNigiriBox.png" alt="sushi">
                    <p class="parent">Salmon Nigiri Box 26 stuks</p>
                    <button type="button" class="button button3">+ €26,30</button>
                </ul>
                <ul>
                    <img src="image/MixBox.png" alt="sushi">
                    <p class="parent">Mix Box 30 stuks</p>
                    <button type="button" class="button button3">+ €27,00</button>
                </ul>
            </article>
        </section>

        <section class="container">
            <article class="container">
                <ul>
                    <img src="image/SalmonliciousBox.jpg" alt="sushi" width="500">
                    <p class="parent">Salmonlicious Box 28 stuks</p>
                    <button type="button" class="button button3">+ €27,50</button>
                </ul>
                <ul>
                    <img src="image/RoyalSushiBox.jpg" alt="sushi">
                    <p class="parent">Royale Sushi Box 28 stuks</p>
                    <button type="button" class="button button3">+ €28,30</button>
                </ul>
                <ul>
                    <img src="image/SushiBox.jpg" alt="sushi" width="500">
                    <p class="parent">Sushi Box 28 stuks</p>
                    <button type="button" class="button button3">+ €27,00</button>
                </ul>
            </article>
        </section>

        <section class="container">
            <article class="container">
                <ul>
                    <img src="image/CelebrationBox.jpg" alt="sushi">
                    <p class="parent">Celebration Box 58 stuks</p>
                    <button type="button" class="button button3">+ €60,00</button>
                </ul>
            </article>
        </section>

        <br>


        <section class="button4">
            <article class="button4">
                <button type="button">
                    <link><a href="bestellen2.php">Vorige pagina</a>
                </button>
            </article>
        </section>

        <section class="button2">
            <article class="button2">
                <button type="button">
                    <link><a href="bestellen4.php">Volgende pagina</a>
                </button>
            </article>
        </section>
    </main>

    <footer>
        <p><i>Nieuwsstraat 210<br>
                3201 EE<br>
                Spijkenisse</i>
        </p>
    </footer>

</body>

</html>
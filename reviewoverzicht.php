<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reviewpagina</title>
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
                <img src="image/Shabu-to-bird.png" alt="Shabu to Bird">
                <h1>Review pagina</h1>
                <p>Kies hier welk formulier je wilt gaan invullen</p>
            </article>
        </section>

        <section>
            <article>
                <h2>Review over ons website</h2>
                <button type="button">
                    <link><a href="formulierwebsite.php">
                        <img src="image/vogel.jpg" alt="vogel" width="200" heigt="200"><br>Website</a>
                </button>
            </article>
        </section>
        <section>
            <article>
                <h2>Review over ons service</h2>
                <button type="button">
                    <link><a href="reviewpagina.php">
                        <video width="200" height="200" controls>
                            <source src="image/larry the screaming bird.mp4" type="video/mp4">
                            <source src="image/larry the screaming bird.mp4" type="video/ogg">
                        </video><br>Service</a>
                </button>
            </article>
        </section>
        <section>
            <article>
                <h2>Review over je mening</h2>
                <button type="button">
                    <link><a href="review.php">
                        <img src="image/vogel.jpg" alt="vogel" width="200" heigt="200"><br>Mening</a>
                </button>
            </article>
        </section>
        <section>
            <article>
                <h2>Review over ons producten</h2>
                <button type="button">
                    <link><a href="reviewproducten.php">
                        <img src="image/shabu-to-go-breda-19060312552458.jpg" alt="Sushi" width="200"
                            height="200"><br>Producten</a>
                </button>
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
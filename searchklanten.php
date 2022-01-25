<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>klantgegevens</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<header class="banner">
    <img src="image/logo.jpg" alt="logo" width="200" height="200">
        <?php include 'navigatie.html'; ?>
    </header>
    <h1>Klantgegevens</h1>
    <section>
        <article>
    <p>Zoek hier je klant gegevens op.</p>
    <form method="POST" action="gezochtklant.php">
        <input type="text" name="search" placeholder="geef naam klant op">
        <input type="submit" name="submit">
    </form>
    
    </article>
</section>
    
</body>
</html>
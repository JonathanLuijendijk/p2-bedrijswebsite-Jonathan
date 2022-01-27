<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Productgegevens</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<header class="banner">
    <img src="image/logo.jpg" alt="logo" width="200" height="200">
        <?php include 'navigatie.html'; ?>
    </header>

    <h1>Zoek hier productgegevens op.</h1>
    <form method="POST" action="gezochtproduct.php">
    <input type="text" name="search" placeholder="geef product naam op">
        <input type="submit" name="submit">
    </form>
    
</body>
</html>
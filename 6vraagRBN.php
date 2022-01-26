<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>date</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>

<header class="banner">
    <img src="image/logo.jpg" alt="logo" width="200" height="200">
    <?php   include 'navigatie.html'; ?>
</header>

<main>
<img src="image/6c2065f3-8020-4f51-ac6d-50d81ffdc8c2.png" alt="sushi" class="responsive">

<section>
    <article>
        <h1>
            Bij welke vestiging is het meest besteld bij shabu to go?
        </h1>
        <p>
            Beverwijk, Breda en Rijswijk hebben allemaal een gedeelde eerste plek met 7 bestellingen.
        </p>
    </article>
</section>
</main>

<?php

//db connection// 
    require_once("dbconshabu.php");

    $query = $db->prepare("SELECT * FROM orders ORDER BY idorder ;");
    $query->execute();

    $resultq = $query->fetchALL(PDO::FETCH_ASSOC);

    if($query->rowCount() > 0){
        echo "<table>";
        echo "<thead>";
        echo "<th>orderID</th><th>Product</th><th>Datum</th><th>Locatie</th>";
        echo "</thead><tbody>";
    foreach($resultq as $data) {
    echo "<tr>";
    echo "<td>";
    echo " ". $data['idorder'];
    echo "</td>";
    echo "<td>";
    echo " ". $data['product'];
    echo "</td>";
    echo "<td>";
    echo " ". $data['date'];
    echo "</td>";
    echo "<td>";
    echo "  ". $data['location'];
    echo "</td>";
    echo "</tr>";
    }
    echo "</tbody></table>";
} else {
    echo "<h2>Helaas geen resultaten gevonden</h2>";
}
    
?>

<footer>
    <p><i>Nieuwsstraat 210<br>
        3201 EE<br>
        Spijkenisse</i>
    </p>
  </footer>
    
</body>
</html>
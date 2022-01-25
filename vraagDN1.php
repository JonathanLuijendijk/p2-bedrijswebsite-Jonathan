<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gegevens van klanten</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <header class="banner">
        <img src="image/logo.jpg" alt="logo" width="200" height="200">
        <?php   include 'navigatie.html'; ?>
    </header>
    <img src="image/ss_xmas_menu06.jpg" alt="sushi" class="responsive">

<h1>De gegevens van de klanten</h1>
<p>Hier staan de gegevens van de klanten.<br>
De gegevens staat op volgorde van je KlantID</p>
<br>
<?php 
//connection to a db// 
    require_once("dbconshabu.php");

    $query = $db->prepare("SELECT * FROM `customer` ORDER BY idcustomer ASC");
    $query->execute();

    $resultq = $query->fetchALL(PDO::FETCH_ASSOC);

    if($query->rowCount() > 0){
        echo "<table>";
        echo "<thead>";
        echo "<th>KlantID</th><th>Naam</th><th>telefoonnummmer</th><th>geboortedatum</th><th>Geslacht</th><th>Plaats</th><th>e-mail</th><th>Postcode</th>";
        echo "</thead><tbody>";
    foreach($resultq as $data) {
    echo "<tr>";
    echo "<td>";
    echo " ". $data['idcustomer'];
    echo "</td>";
    echo "<td>";
    echo " ". $data['name'];
    echo "</td>";
    echo "<td>";
    echo " ". $data['phonenumber'];
    echo "</td>";
    echo "<td>";
    echo "  ". $data['dateofbirth'];
    echo "</td>";
    echo "<td>";
    echo "  ". $data['gender'];
    echo "</td>";
    echo "<td>";
    echo "  ". $data['place'];
    echo "</td>";
    echo "<td>";
    echo " ". $data['e-mail'];
    echo "<td>";
    echo " ". $data['postalcode'];
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

</body>
</html>
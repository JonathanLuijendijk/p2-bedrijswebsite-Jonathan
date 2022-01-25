<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>2004</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <header class="banner">
        <img src="image/logo.jpg" alt="logo" width="200" height="200">
        <?php   include 'navigatie.html'; ?>
    </header>
    <img src="image/ss_xmas_menu06.jpg" alt="sushi" class="responsive">

<h1>Hoeveel klanten van ons zijn in 2004 geboren</h1>
<p>Hier staat hoeveel klanten in 2004 geboren zijn, want dit jaar worden deze klanten 18 jaar oud.</p>
<?php 
//connection to a db// 
    require_once("dbconshabu.php");

    $query = $db->prepare("SELECT COUNT(*) AS 'aantal' FROM `customer` WHERE dateofbirth BETWEEN '2004-01-01' AND '2004-12-31'");
    $query->execute();

    $resultq = $query->fetchALL(PDO::FETCH_ASSOC);

    if($query->rowCount() > 0){
        echo "<table>";
        echo "<thead>";
        echo "<th>Aantal</th>";
        echo "</thead><tbody>";
    foreach($resultq as $data) {
    echo "<tr>";
    echo "<td>"; 
        echo " Aantal : ". $data['aantal'];
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
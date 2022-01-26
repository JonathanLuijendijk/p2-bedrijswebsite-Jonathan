<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hoeveel mensen hebben een U in hun naam?</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <header class="banner">
        <img src="image/logo.jpg" alt="logo" width="200" height="200">
        <?php   include 'navigatie.html'; ?>
    </header>
    <img src="image/ss_xmas_menu06.jpg" alt="sushi" class="responsive">

<h1>Hoeveel mensen hebben een U in hun naam?</h1>

<?php 
    //db connection// 
    require_once("dbconshabu.php");

    $query = $db->prepare("SELECT * FROM customer WHERE name LIKE '%U%' ;");
    $query->execute();

    $resultq = $query->fetchALL(PDO::FETCH_ASSOC);

    if($query->rowCount() > 0){
        echo "<table>";
        echo "<thead>";
        echo "<th>KlantID</th><th>Naam</th><th>Geslacht</th><th>Plaats</th>";
        echo "</thead><tbody>";
    foreach($resultq as $data) {
        echo "<tr>"; 
        echo "<td>"; 
      echo " " .$data['idcustomer'];
      echo "</td>";  
      echo "<td>"; 
      echo " ". $data['name'];
      echo "</td>"; 
      echo "<td>"; 
      echo " ". $data['gender'];
      echo "</td>"; 
      echo "<td>"; 
      echo "  ". $data['place'];
      echo "</td>";
    }      echo "</tbody></table>";
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
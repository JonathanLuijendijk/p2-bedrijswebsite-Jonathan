<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Achternaam Nguyen</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <header class="banner">
        <img src="image/logo.jpg" alt="logo" width="200" height="200">
        <?php   include 'navigatie.html'; ?>
    </header>
    <img src="image/ss_xmas_menu06.jpg" alt="sushi" class="responsive">

    <h1>Hoeveel klanten hebben de achternaam Nguyen?</h1>
    <p>Nguyen is een heel beroemd Vietnamese achternaam.<br>
      Je hebt het weleens gehoord en soms kom je ook Vietnamese mensen tegen met dezelfde achternaam tegen, maar ze zijn geen familie van elkaar.<br>
      Wij zijn daarom benieuwd hoeveel klanten de achternaam Nguyen hebben.</p>
    <br>
<?php 
//connection to a db// 
    require_once("dbconshabu.php");

    $query = $db->prepare("SELECT * FROM `customer` WHERE name LIKE '%Nguyen%' ORDER BY `customer`.`idcustomer` ASC");
    $query->execute();

    $resultq = $query->fetchALL(PDO::FETCH_ASSOC);

    foreach($resultq as $data) {
        echo " KlantID : " .$data['idcustomer'];
        echo "<br>";  
        echo " Naam : ". $data['name'];
        echo "<br>"; 
        echo " telefoonnummer : ". $data['phonenumber'];
        echo "<br>"; 
        echo " geboortedatum : ". $data['dateofbirth'];
        echo "<br>"; 
        echo " Geslacht : ". $data['gender'];
        echo "<br>"; 
        echo " Plaats : ". $data['place'];
        echo "<br>"; 
        echo " e-mail : ". $data['e-mail'];
        echo "<br>"; 
        echo " Postcode : ". $data['postalcode'];
        echo "<br>";
        echo "<br>"; 
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
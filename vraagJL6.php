<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Wat zijn onze duurste producten?</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <header class="banner">
        <img src="image/logo.jpg" alt="logo" width="200" height="200">
        <?php   include 'navigatie.html'; ?>
    </header>
    <img src="image/ss_xmas_menu06.jpg" alt="sushi" class="responsive">

<h1>Wat zijn onze duurste producten?</h1>

<?php 
    //db connection// 
    require_once("dbconshabu.php");

    $query = $db->prepare("SELECT * FROM `product` ORDER BY 'prijs' AND > 20 ");
    $query->execute();

    $resultq = $query->fetchALL(PDO::FETCH_ASSOC);

    foreach($resultq as $data) {
      echo " ProductID : " .$data['productid'];
      echo "<br>";  
      echo " Naam : ". $data['naam'];
      echo "<br>"; 
      echo " Soort : ". $data['soort'];
      echo "<br>"; 
      echo " Prijs : ". $data['prijs'];
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
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gegevens van boxes</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <header class="banner">
        <img src="image/logo.jpg" alt="logo" width="200" height="200">
        <?php   include 'navigatie.html'; ?>
    </header>
    <img src="image/ss_xmas_menu06.jpg" alt="sushi" class="responsive">

    <h1>Boxes van Shabu</h1>
    <?php
    // verbinding maken database shabu //
    require_once ("dbconshabu.php");
    //  alle gegevens ophalen uit de tabel: product
        $query = $db ->prepare("SELECT * FROM `product` WHERE soort LIKE 'boxes' AND hoeveelheid > 20;");
        $query-> execute();
        $resultq = $query->fetchALL (PDO::FETCH_ASSOC);
        if ($query ->RowCount()>0) {
            echo "<table>";
            echo	"<thead>";
            echo    "<th> Naam </th><th> Prijs €</th><th> Hoeveelheid </th><th> soort </th>";
            echo   "</thead> <tbody>";


          foreach ($resultq as &$data) {
            echo "<tr>";
            echo "<td>";
            echo "" .$data["naam"];
            echo "</td>";
            echo "<td>";
            echo "" .$data["prijs"];
            echo "</td>";
            echo "<td>";
            echo "" .$data["hoeveelheid"]; 
            echo "</td>";
            echo "<td>";
            echo "" .$data["soort"]; 
            echo "</td>";
           
        } 
        echo "</tbody></table>";
        } else {
             echo "Helaas niks gevonden.";
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
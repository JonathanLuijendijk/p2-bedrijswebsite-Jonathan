<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>poke bowls goedkoper dan €10</title>
</head>
<body>
    <?php
    // verbinding maken database shabu //
    require_once ("dbconshabu.php");
    //  alle gegevens ophalen uit de tabel: product
        $query = $db ->prepare("SELECT * FROM `product` WHERE soort LIKE 'poke bowls' AND prijs < 10.00;");
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
    
</body>
</html>
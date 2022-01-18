<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Al het drinken</title>
</head>
<body>
    <?php
    // verbinding maken database shabu //
    require_once ("dbconshabu.php");
    //  alle gegevens ophalen uit de tabel: product
        $query = $db ->prepare("SELECT * FROM product WHERE soort LIKE 'drinks'");
        $query-> execute();
        $resultq = $query->fetchALL (PDO::FETCH_ASSOC);
        foreach ($resultq as &$data) {
            echo " naam: " .$data["naam"];
            echo " prijs:  €" .$data["prijs"];
            echo " hoeveelheid: " .$data["hoeveelheid"]; 
            echo " soort: " .$data["soort"]; 
            echo "<br>";
           
        }
        

    ?>
    
</body>
</html>
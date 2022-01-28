<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ordergegevens</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<header class="bannerXL">
    <img src="image/logo.jpg" alt="logo" width="200" height="200">
        <?php include 'navigatie.html'; ?>
    </header>

    <h1>Resultaat</h1>

<?php 
include 'dbconshabu.php';
?>

<?php 
        require_once ("dbconshabu.php"); 
        $zoek=filter_var($_POST["search"], FILTER_SANITIZE_STRING);
//        var_dump($zoek);
        $query = $db->prepare("SELECT * FROM orders
        WHERE idorder LIKE :cname");
        $query->bindValue(':cname', "%$zoek%");
        $query->execute();
//        var_dump($query);
        $resultq = $query->fetchALL (PDO::FETCH_ASSOC);
        if($query->rowCount() > 0){
            echo "<table>";
            echo "<thead>";
            echo "<th>OrderID</th><th>Product</th><th>Date</th><th>Location</th>";
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

</body>
</html>
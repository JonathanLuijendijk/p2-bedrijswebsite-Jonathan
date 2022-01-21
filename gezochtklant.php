<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Klantengegevens</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<header class="banner">
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
        $query = $db->prepare("SELECT name FROM customer
        WHERE name LIKE :name");
        $query->bindValue(':name', "%$zoek%");
        $resultq = $query->fetchALL (PDO::FETCH_ASSOC);
        var_dump($resultq);

        foreach($resultq as $data) {
              echo " Naam : ". $data['name'];
             echo "<br>"; 
            }
?>

</body>
</html>
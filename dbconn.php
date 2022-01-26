
<?php

try{
    $db = new PDO("mysql:host=localhost;dbname=shabu", "root", "root");
} catch(PDOException $e){
    die("Error: " . $e->getMessage());
}

?>


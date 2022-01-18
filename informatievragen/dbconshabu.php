<?php 
try {
 $db = new PDO ("mysql:host=localhost;dbname=shabu", "root" , "");

}  catch (PDOException $e) {
    die ("Error!:" . $e->getMessage());
}
?>
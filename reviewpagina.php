<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reviewpagina service</title>
  <link rel="stylesheet" type="text/css" href="styles.css">
  <link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>



<section>
<section>
    <img src="image/6c2065f3-8020-4f51-ac6d-50d81ffdc8c2.png" alt="sushi" class="responsive">
    <p><h1>Reviewpagina Service</h1></p>
</section>
<?php 

    if(isset($_POST['verzenden'])) {
        $aanhef = $_POST['aanhef'];
        $naam = $_POST['naam'];
        $bericht = $_POST['bericht'];
        $email = $_POST['email'];
        $eenster = $_POST['sterren'];

        



        echo "Het formulier is verzonden!<br>";
        echo "<br>";
        echo "Naam: " . $aanhef . " " . $naam . "<br>";
        echo "email: "  . $email . "<br> ";
        echo "U geeft onze service een: ". $eenster . "<br>";
        echo "Bericht: " . $bericht . "<br><br><br>";
        
         
        
    }  else {
        $aanhef = "";
        $naam = "";
        $bericht = "";
        $email= "";
        $eenster= "";
        
    }
    ?>
         
    <form method="post" action="">
        <label>*Aanhef:</label>
        <input required type="radio" name="aanhef" value="dhr">Dhr.
        <input required type="radio" name="aanhef" value="mevr">Mevr.

        <br>

        <label>*Naam:</label>
        <input required type="text" placeholder="Vul hier uw naam in. " name="naam" value="<?php echo $naam; ?>"> 
             <br>
        <label>*Email:</label>
        <input required type="text" placeholder="Vul hier uw Email in. " name="email" value="<?php echo $email; ?>">
         <br>
        <label>*Bericht:</label>
        <textarea placeholder="Vul hier in wat beter kan of wat u goed vindt aan onze service." required name="bericht"><?php echo $bericht; ?></textarea>
          <br>

          <label>*Hoeveel sterren geeft u onze service? </label>
          <input required type="radio" name="sterren" value="1">1
          <input required type="radio" name="sterren" value="2">2
          <input required type="radio" name="sterren" value="3">3
          <input required type="radio" name="sterren" value="4">4
          <input required type="radio" name="sterren" value="5">5
        <br>

        <input type="submit" name="verzenden" value="Verzenden">
        <p> * verplichte velden</p>
    </form>

    
</body>
<footer>
    <p><i>Nieuwsstraat 210<br>
        3201 EE<br>
        Spijkenisse</i>
    </p>
  </footer>



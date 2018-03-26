<!DOCTYPE html>
<html lang="sv">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" 
integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <title>Bestallning</title>
</head>
<body>


<?php
require_once('login.php');

if(isset($_POST['artikelnummer'])){
  
  $ID=      htmlspecialchars ($_POST['artikelnummer']);
  $namn=    htmlspecialchars ($_POST['namn']);
  $mail=    htmlspecialchars ($_POST['mail']);
  $adress=  htmlspecialchars ($_POST['adress']);
  $message= htmlspecialchars ($_POST['message']);

  $sql = "INSERT INTO orderlista VALUES ('','$ID','$namn','$mail','$adress','$message')";

$tabell = mysqli_query($connection , $sql) or die(mysqli_error($connection)) ;
}
else{
header('location: index.php');
exit();
}

echo "<h2 class='ml-3'> Tack för er order!</h2>";

echo "<p class='ml-3'>"    . 
          $namn   . "<br>" .
          $adress . "<br>" .
          $mail   . "<br>" .
          $message. "<br>" .
          "<a href='orderlista.php' class='btn btn-dark'>Gå vidare till orderlista</a>";

// Skapa en SQL-sats
$sql = "SELECT * from produkter WHERE artikelnummer= '$ID'";

$tabell = mysqli_query($connection , $sql) or die(mysqli_error($connection)) ;

  while($row = $tabell->fetch_assoc()){
              
?>        
<ul class="list-group">

  <li class="list-group-item active bg-dark"> <em> Artikelnummer:</em> <?=$row['artikelnummer']?></li>
  <li class="list-group-item"><em>Produkt:</em> <?= $row['produkt'] ?></li>
  <li class="list-group-item"><em>Produkt beskrivning:</em> <?=$row['beskrivning']?></li>
  <li class="list-group-item"><em>Pris:</em> <?=$row['pris']?> kr</li>
  
  <li class="list-group-item"><img src="images/<?=$row['bild']?>" 
   alt="#" 
   class="card zoom img-fluid w-25 img-thumbnail grow my-4"></li>

</ul>

  <?php }  ?>
</body>
</html>


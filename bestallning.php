 <?php
/* echo "<pre>";
print_r($_SERVER);
echo "</pre>";*/



 define("PAGE_TITLE" , "Din beställning"); 
 include 'header.php';
 
if(isset($_GET ['id'])){
    $id= htmlspecialchars($_GET['id']);
}
else{
 //header('location: index.php');
exit();
 }

 echo "<h2>Du har valt artikelnummer: $id</h2>"; 


?>

<div class="container  bg-dark text-white py-3 mb-3">

<h3>Utföra köpet</h3>

<form method="POST" action="http://localhost/retroShop/bekraftelse.php" >

<p>Namn <br>
<input type="text" name="namn" placeholder="Ange ditt namn" required>
</p>

<p>E-post <br>
<input type="email" name="mail" placeholder="namn@exempel.com" required>
</p>

<p>Leverans Adress <br>
<input type="adress" name="adress" placeholder="Ange din Leverans adress" required>
</p>

<p>Meddelande <br>
<textarea  name="message"  cols="50"  rows="5" ></textarea>
</p>

<input type="submit" value="Skicka meddelandet">

<input type="hidden" name="artikelnummer" value="<?=$id?>">
</form>
</div>


<?php  include 'footer.php' ?>
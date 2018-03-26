<?php 
    define("PAGE_TITLE" , "beställ"); 
    include 'header.php';
    require_once('login.php');

$sql = "SELECT * FROM produkter";
$tabell = mysqli_query($connection , $sql) 
          or die(mysqli_error($connection)) ;
?>
         <div class=" bg-dark pt-3 pb-3 double mb-3">
        <table class="table table-striped table-danger text-danger" >
        <thead>
            <tr>   
                
                <th scope="col">#</th>
                <th scope="col">Produkt</th>
                <th scope="col">Beskrivning</th>
                <th scope="col">Pris</th>
            </tr>
        </thead>
       <?php while($row = $tabell->fetch_assoc()){ //DENNA SKAPAR EN ASSOCIATIVE ARRAY AV TABELLEN ?>  
    <tbody>
        <tr>
        <td><?=$row['artikelnummer']?></td>
      <td><?= $row['produkt'] ?><img src="images/<?=$row['bild']?>"  alt="#" class="card zoom img-fluid img-thumbnail grow my-4"</td>
      <td><?=$row['beskrivning'];?> <br><br><br><br><br>   
      <a href="bestallning.php/?id=<?=$row['artikelnummer']?>" 
      class="btn btn-dark">Beställ</a> </td>
 
      <td><?=$row['pris'];?> </td>
    </tr>
    <?php } ?>
  </tbody>
</table>


</div>

<?php include('footer.php'); ?>

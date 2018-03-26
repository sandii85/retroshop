<?php 
    define("PAGE_TITLE" , "orderlista"); 
    include 'header.php';
    require_once('login.php');

$sql = "SELECT * FROM orderlista, produkter where orderlista.artikelnummer = produkter.artikelnummer";

$tabell = mysqli_query($connection , $sql) 
          or die(mysqli_error($connection)) ;
?>
         <div class=" bg-dark pt-3 pb-3 double mb-3">
        <table class="table table-striped table-danger text-danger" >
        <thead>
            <tr>   
                
                <th scope="col">Ordernummer</th>
                <th scope="col">Artikelnummer</th>
                <th scope="col">Produkt</th>
                <th scope="col">Pris</th>
                <th scope="col">Namn</th>
                <th scope="col">Mail</th>
                <th scope="col">Adress</th>
                <th scope="col">meddelande</th>
            </tr>
        </thead>
       <?php while($row = $tabell->fetch_assoc()){ //DENNA SKAPAR EN ASSOCIATIVE ARRAY AV TABELLEN ?>  
    <tbody>
        <tr>
        <td><?=$row['ordernummer']?></td>
        <td><?=$row['artikelnummer']?></td>
        <td><?=$row['produkt']?></td>
        <td><?=$row['pris']?></td>
        <td><?= $row['namn'] ?></td>
      <td><?=$row['mail'];?>   </td>
      <td><?=$row['adress'];?> </td>
      <td><?=$row['message'];?> </td>
    </tr>
    <?php } ?>
  </tbody>
</table>


</div>

<?php include('footer.php'); ?>

<?php

$dbHost = "localhost";
$dbUser = "root";
$dbPass = "root";
$dbName = "retro-heaven";
$connection = mysqli_connect($dbHost , $dbUser, $dbPass, $dbName);
if(!$connection){
    echo "Felmeddelande <br>" . mysqli_connect_error(); 
    exit;
}
mysqli_set_charset($connection, "utf8");

$query = "SELECT * FROM produkter";
// Kör SQL-satsen

$table = mysqli_query($connection, $query)
         or die(mysqli_error($connection));
//Lagra data
$array = array(); 
while($row = $table->fetch_assoc()){
    $array[] = $row; 
}
// print ("<pre>");
// print_r($array);
// print ("</pre>");

// Steg 4: Skapa JSON med hjälp av funktionen json_encode()
// Tips: http://php.net/manual/en/function.json-encode.php

$json_string = json_encode($array, JSON_PRETTY_PRINT);
// Skriv ut JSON

echo $json_string;

// OBS! ingen extra info får skrivas ut
?>
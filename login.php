
<?php
ini_set("display_errors",1);

$dbHost = "localhost";
$dbUser = "root";
$dbPass = "root";
$dbName = "retro-heaven";
$connection = mysqli_connect($dbHost , $dbUser , $dbPass , $dbName);


if(!$connection){
    echo "<h1>Fel! <br>" . mysqli_connect_error() . "</h1>";
    exit;
}

mysqli_set_charset($connection, "utf8");
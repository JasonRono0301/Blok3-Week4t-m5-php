<?php
    $db = 'localhost';
    $name = 'root';
    $password = '';
    $dbname = 'test.php ';

    $connection = new mysqli($dbname, $name, $password);

    if($connection->connect_error){
        die("Fout:" . $connection->connect_error);
    }
    echo "Gelukt";
?>
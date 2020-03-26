<?php
    $host = "localhost";//Hostnaam.
    $name = "root";//Mysql naam.
    $password = "";//Wachtwoord.
    $db = "databank_php";//database naam. 

    mysql_connect($host, $name, $password) or die ("Er is een error in gekomen.");//Er word verbinding gemaakt.
    mysql_select_db($db) or die ("De database naam bestaat helaas niet ");//Er word verbinding gemaakt met de database. 

    
?>
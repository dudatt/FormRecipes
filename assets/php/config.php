<?php

    $dbHost = 'Localhost';
    $dbUsername = 'root';
    $dbPassword = '';
    $dbName = 'form_recipes';

    $connection = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);

    //if($connection->connect_error){
    //    echo "erro";
    //} else {
    //    echo "deu bom";
    //}
?>
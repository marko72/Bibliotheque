<?php
include "config.php";
$connection = null;
try{
    $connection = new PDO("mysql:host=".MYSQL_HOSTNAME.";dbname=".MYSQL_DBNAME.";charset=utf8",MYSQL_USERNAME,MYSQL_PASSWD);
    $connection->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    $connection->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE,PDO::FETCH_OBJ);
}catch (PDOException $e){
    echo "Neuspelo povezivanje na bazu zbog greske: ";
    echo $e->getMessage();
}
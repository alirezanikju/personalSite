<?php

try{
$server = "localhost";
$dbName = "personalSite";
$db_userName = "root";
$db_password = "";

$dsn = "mysql:host = $server , dbname=$dbName";
$conection = new PDO($dsn,$db_userName,$db_password);

return $conection;

}catch(PDOException $error){
    echo $error;
}

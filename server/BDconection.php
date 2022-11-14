<?php

function conection(){
    $user = "root";
    $passw = "";
    $dsn = "mysql:host=localhost;dbname=psychomango";
    
    $con = new PDO($dsn, $user, $passw);
    $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    return $con;
}
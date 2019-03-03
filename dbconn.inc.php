<?php

function dbConnect(){
    $host = "localhost";
    $user = "khhutacl_khh9106";
    $pwd = "M@vs4life101";
    $database = "khhutacl_hackathon2019";
    $port = "3306";

    $conn = new mysqli($host, $user, $pwd, $database, $port) or die("could not connect to server");


    return $conn;}


?>
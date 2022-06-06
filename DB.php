<?php

if(strpos($_SERVER['REQUEST_URI'],"DB.php")){
    require_once 'Utils.php';
    PlainDie();
}

$conn = new mysqli("localhost", "id18040534_cris", "SzK^c8L|y1Q\WG<c", "id18040534_cristiano");
if($conn->connect_error != null){
    die($conn->connect_error);
}
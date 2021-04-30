<?php
header('Access-Control-Arrow-Origin: *');
$db = mysqli_connect('localhost','root','','appsalon');
$db->set_charset('utf8');

if(!$db) {
    echo 'ERROR en la coneccion';
    exit;
}

// echo 'Coneccion correcta!!!';
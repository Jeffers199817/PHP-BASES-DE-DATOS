<?php 

$db= mysqli_connect('localhost','root','Jeff1998','appsalon');

if(!$db){
    echo 'Hubo un error';
    exit;
}
<?php
$url = $_SERVER['REQUEST_URI'];
//echo $url;
if($url == "/examen/public/"){
 require_once "../views/inicio.php";
}elseif ($url == "/examen/public/ejercicio1/"){
    require_once "../views/ejercicio01.php";
}elseif ($url == "/examen/public/ejercicio2/"){
    require_once "../views/ejercicio02.php";
}elseif ($url == "/examen/public/ejercicio3/"){
    require_once "../views/ejercicio03.php";
}
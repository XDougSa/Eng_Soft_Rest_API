<?php

$url = $_SERVER["REQUEST_URI"];

switch($url){
    case "/cadastro": 
        include("src/view/cadastro.php");
        break;
    default: 
        echo("Error 404");
        break;
}

?>
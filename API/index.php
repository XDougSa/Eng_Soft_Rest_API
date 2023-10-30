<?php
header("Content-Type: application/json");
require("vendor/autoload.php");
use controller\usercontroller;

$url = $_SERVER["REQUEST_URI"];
$method = $_SERVER["REQUEST_METHOD"];
if ($method == "POST") {
    switch ($url) {
        case '/cadastro':
            $usuario = new usercontroller();
            $result = $usuario -> cadastro(file_get_contents("php://input"));
            echo $result;
            break;
        
        default:
            echo "Rota não existe";
            break;
    }
}


?>
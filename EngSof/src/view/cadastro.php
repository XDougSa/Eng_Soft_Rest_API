<?php
require_once ("vendor/autoload.php");
use controller\usercontroller;
    if ($_POST){
        $usercontroller = new usercontroller();
        $saveresult = $usercontroller -> cadastrar($_POST["nome"], $_POST["email"]) ;
        echo $saveresult;
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method = "POST">
        <input name = "nome" type = "text" placeholder = "Digite seu nome" required/>
        <input name = "email" type = "email" placeholder = "Digite seu E-mail" required/>
        <input type = "submit" value = "cadastrar" required/>
    </form>
</body>
</html>

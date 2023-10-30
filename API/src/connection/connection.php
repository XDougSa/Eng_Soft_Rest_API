<?php

namespace connection;
require_once("vendor/autoload.php");
use PDO;

class connection{
    function connect(){
        return new PDO("pgsql:host=localhost;port=5432;dbname=API", "postgres", "0128");
    }
}

?>
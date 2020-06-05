<?php

namespace Source\Controller;

require "vendor/autoload.php";

switch($_SERVER["REQUEST_METHOD"]){
    case "POST":
        echo "OK";
    break;
    default:
        header("HTTP/1.1 401 Unauthorized");
    break;
}
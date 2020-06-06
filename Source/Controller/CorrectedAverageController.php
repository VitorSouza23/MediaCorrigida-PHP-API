<?php

namespace Source\Controller;

use Source\Model\CorrectedAverage;
use Source\Operators\CorrectedAverageCalculator;

require "vendor/autoload.php";

switch($_SERVER["REQUEST_METHOD"]){
    case "POST":
        $contents = file_get_contents("php://input");
        $data = json_decode($contents, true);
        
        $correctedAverage = new CorrectedAverage();
        $correctedAverage->setSample($data);
        
        $calculator = new CorrectedAverageCalculator($correctedAverage);
        echo $calculator->calculate();
    break;
    default:
        header("HTTP/1.1 401 Unauthorized");
    break;
}
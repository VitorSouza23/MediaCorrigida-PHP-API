<?php

namespace Source\Operators;

use Source\Model\CorrectedAverage;

require_once "vendor/autoload.php";

class CorrectedAverageCalculator implements CalculatorInterface{
    private CorrectedAverage $correctAvarege;

    public function __construct(CorrectedAverage $correctAvarege){
        $this->correctAvarege = $correctAvarege;
    }

    public function calculate() : float{
        return ($this->correctAvarege->getSampleSum() - 
            ($this->correctAvarege->getSampleMaxValue() - $this->correctAvarege->getSampleMinValue()))
            / ($this->correctAvarege->getSampleTotalCount() - 1);
    }
}
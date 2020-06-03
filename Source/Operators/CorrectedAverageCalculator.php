<?php

namespace Source\Operator;
use Source\Model\CorrectedAverage;

class CorrectedAverageCalculator implements CalculatorInterface{
    private CorrectedAverage $correctAvarege;

    public function __construct(CorrectedAverage $correctAvarege){
        $this->correctAvarege = $correctAvarege;
    }

    public function calculate() : number{
        return ($this->correctAvarege.getSampleSum() - 
            ($this->correctAvarege.getSampleMaxValue() - $this->correctAvarege.getSampleMinValue()))
            / ($this->correctAvarege.getSampleTotalCount() - 1);
    }
}
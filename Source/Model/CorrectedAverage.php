<?php

namespace Source\Model;

class CorrectedAverage {
    private $sample = array();

    public function setSample(array $sample = array()){
        $this->sample = $sample;
    }

    public function getSample() : array {
        return $this->sample;
    }

    public function getSampleTotalCount() : number{
        return count($this->sample);
    }

    public function getSampleMinValue() : number{
        return min($this->sample);
    }

    public function getSampleMaxValue() : number{
        return max($this->sample);
    }

    public function getSampleSum() : number{
        return array_sum($this->sample);
    }
}
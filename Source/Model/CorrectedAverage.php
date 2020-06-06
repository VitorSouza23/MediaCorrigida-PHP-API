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

    public function getSampleTotalCount() : int{
        return count($this->sample);
    }

    public function getSampleMinValue() : int{
        return min($this->sample);
    }

    public function getSampleMaxValue() : int{
        return max($this->sample);
    }

    public function getSampleSum() : int{
        return array_sum($this->sample);
    }
}
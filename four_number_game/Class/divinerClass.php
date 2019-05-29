<?php namespace diviner;
use utils\UtilsClass;

class divinerClass {
    private $thinker;
    private $trace = array();

    public function guessNumber () {
        $random_number = UtilsClass::generateNumber();
        $response = $this->thinker->isNumber($random_number);
        if ($response['good'] == 4) {
            return $random_number;
        }
        $trace = array('number'=>$random_number, 'good'=>$response['good'], 'regular'=>$response['regular']);
        $this->setTrace($trace);

        return $this->searchCantidates($random_number);
    }


    public function searchCantidates ($number) {
        while(!UtilsClass::isValidNumber($number)){
            $number++;
            return $this->searchCantidates($number);
        }

        if($this->isAceptable(end($this->trace), $number)) {
            if (end($this->trace)['good'] == 4) {
                return end($this->trace)['number'];
            }
        }

        if($number >= UtilsClass::max_value) {
            $number = UtilsClass::min_value;
        } else {
            $number = $number + 1;
        }

        return $this->searchCantidates($number);
    }

    public function isAceptable($trace, $new_number) {
        $response = $this->thinker->isNumber($new_number);
        if ($trace['good'] < $response['good']) {
            $trace = array('number'=>$new_number, 'good'=>$response['good'], 'regular'=>$response['regular']);
            $this->setTrace($trace);

            return true;
        } else if ($trace['regular'] < $response['regular']){
            $trace = array('number'=>$new_number, 'good'=>$response['good'], 'regular'=>$response['regular']);
            $this->setTrace($trace);
            return true;
        } else {
            return false;
        }
    }

    public function setTrace($trace)
    {
        $this->trace[] = $trace;
    }
    public function setThinker($thinker)
    {
        $this->thinker = $thinker;
    }
}
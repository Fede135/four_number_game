<?php namespace thinker;

include 'Utils/UtilsClass.php';
use utils\UtilsClass;

class thinkerClass {
    private $random_number;

    public function setRandomNumber($random_number) {
        $aux = (int) $random_number;
        $this->random_number = (string) $aux;
    }

    public function thinkNumber() {
        $this->random_number = UtilsClass::generateNumber();
    }

    public function isNumber ($number) {

        $array_number = array_map('intval', str_split($number));
        $array_random_number = array_map('intval', str_split($this->random_number));
        $count_g = 0;
        $count_r = 0;

        for ($i = 0; $i < count($array_number); $i++) {
            for ($j = 0; $j < count ($array_random_number); $j++){
                if ($i == $j && $array_number[$i] == $array_random_number[$j]) {
                    $count_g++;
                } else if ($array_number[$i] == $array_random_number[$j]){
                    $count_r++;
                }
            }
        }

        $text = "";
        switch ($count_g) {
            case 0:
                break;
            case 4:
                $text = '4 Bien. Juego Terminado!';
                break;
            default:
                $text = $count_g.' Bien ';
                break;
        }

        if (!empty($count_r)) {
            $text .= $count_r.' regular';
        }

        return array("good"=>$count_g, 'regular'=>$count_r ,"text"=>$text);
    }
}

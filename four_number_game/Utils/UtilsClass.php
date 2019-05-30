<?php namespace utils;

class UtilsClass {
    const min_value = 1023;
    const max_value = 9876;

    public static function generateNumber($values = null) {
        $offset = 0;

        if(empty($values)) {
            $values = range(0,9);
        }

        shuffle($values);

        if ($values[0] === 0) {
            $offset = 1;
        }

        return (string) implode("", array_slice($values, $offset, 4));
    }

    public static function isValidNumber($number) {

        if ((int) $number < self::min_value || (int) $number > self::max_value) {
            return false;
        }

        $number = (int) $number;
        $number = (string) $number;

        $random_number_arr = array_map('intval', str_split($number));

        return count($random_number_arr) === count(array_unique($random_number_arr));
    }
}

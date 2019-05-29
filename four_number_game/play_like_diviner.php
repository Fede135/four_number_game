<?php

include 'Class/thinkerClass.php';

$thinker_obj = new thinker\thinkerClass();
$number = $thinker_obj->thinkNumber();
$response['good'] = 0;

do {
    do {
        fwrite(STDOUT, "Ingrese un número de cuatro dígitos, donde los dígitos no deben repetirse\n");
        $number_in = fgets(STDIN);
    } while (!utils\UtilsClass::isValidNumber(trim($number_in)));

    $response = $thinker_obj->isNumber(trim($number_in));
    fwrite(STDOUT, $response['text']."\n");
    flush();
} while ($response['good'] != 4);

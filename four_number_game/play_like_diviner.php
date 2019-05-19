<?php

include 'Classes/thinkerClass.php';

$thinker_obj = new thinker\thinkerClass();
$number = $thinker_obj->thinkNumber();
$response['good'] = 0;

do {
    do {
        fwrite(STDOUT, "Ingrese un número de cuatro dígitos\n");
        $number = fgets(STDIN);
    } while (!\utils\UtilsClass::isValidNumber(trim($number)));

    $response = $thinker_obj->isNumber($number);
    fwrite(STDOUT, $response['text']."\n");
    flush();
} while ($response['good'] != 4);

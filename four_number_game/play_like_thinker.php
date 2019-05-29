<?php
include 'Class/thinkerClass.php';
include 'Class/divinerClass.php';

$thinker_obj = new thinker\thinkerClass();

do {
    fwrite(STDOUT, "Ingrese un número de cuatro dígitos, donde los dígitos no deben repetirse\n");
    $number = fgets(STDIN);
} while((!utils\UtilsClass::isValidNumber(trim($number))));

$thinker_obj->setRandomNumber(trim($number));
$diviner = new diviner\divinerClass();
$diviner->setThinker($thinker_obj);
$number = $diviner->guessNumber();
fwrite(STDOUT, "El número ingresado es ".$number."\n");

#Aclaraciones:

Se tuvo en cuenta para la generación de números aleatorios que el primer dígito debe ser distinto de 0. La justificación a esto es que el número "0123" en realidad es el número 123.

Ingresar valores como "01234", no tendrá en cuenta los 0 a la izquierda, sino que se considera como número 1234.

La versión de php usada para programar es la versión 7.2.

#Como jugar

Para jugar como adivinador, donde la computadora piensa un número y usted adivina que número es, debe ejecutar en consola:

- php play_like_divinir.php 

Para jugar como pensador, donde usted piensa un número y la computadora lo adivina, debe ejecutar el siguiente comando en consola:

- php play_like_thinker.php

#Como ejecutar test unitarios

Ejecutando los siguientes comandos en la raíz del proyecto, se podrán correr los test unitarios

- ./vendor/bin/phpunit --bootstrap vendor/autoload.php Test/thinkerTest.php

- ./vendor/bin/phpunit --bootstrap vendor/autoload.php Test/divinerTest.php
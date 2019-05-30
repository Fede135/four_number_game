<?php

use PHPUnit\Framework\TestCase;
use thinker\thinkerClass;
use utils\UtilsClass;

require __DIR__ . '/../Class/thinkerClass.php';

final class thinkerTest extends TestCase
{
    public function testSetRandomNumber()
    {
        $thinker = new thinkerClass();
        $thinker->thinkNumber();
        $thinker_num = $thinker->getRandomNumber();

        $this->assertTrue(UtilsClass::isValidNumber($thinker_num));
    }

}
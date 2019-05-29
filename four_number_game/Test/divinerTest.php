<?php

use PHPUnit\Framework\TestCase;
use thinker\thinkerClass;
use diviner\divinerClass;

require __DIR__ . '/../Class/divinerClass.php';
require __DIR__ . '/../Class/thinkerClass.php';

final class divinerTest extends TestCase
{
    public function testGuessNumber()
    {
        $diviner = new divinerClass();
        $thinker = new thinkerClass();
        $thinker->thinkNumber();
        $diviner->setThinker($thinker);
        $thinker_num = $thinker->getRandomNumber();
        $diviner_num = $diviner->guessNumber();

        $this->assertEquals($thinker_num, $diviner_num);
    }
}

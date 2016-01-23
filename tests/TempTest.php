<?php
require_once __DIR__ . '/../Temp.php';

class TempTest extends PHPUnit_Framework_TestCase {

    function testA() {
        $w = new Temp();

        $this->assertEquals(5, $w->testA(5, 5));

    }
}
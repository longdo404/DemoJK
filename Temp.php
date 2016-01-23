<?php
class Temp {
    public function testA($a, $b)
    {
        if ($a < $b) {
            return $b;
        } else if ($a == $b) {
            return $a;
        } else {
            return $b;
        }
    }
}
<?php

class Math{
    public static $pi = 3.14;

    public static function getSum($a,$b){
        return $a + $b;
    }
}

$radious = 4;
$area = Math::$pi *($radious**2);
echo "<br>Area of a circle with radious {$radious} is {$area}";
$a = 5;
$b=7;
$sum= Math::getSum($a,$b);
echo "<br>Sum of {$a} and {$b} is {$sum}";
?>
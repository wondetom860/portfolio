<?php

error_reporting(0);
$PATHINFO_DIRNAME = __DIR__ . "";
echo "Hello world!, php serving from: <i><code>" . $PATHINFO_DIRNAME . "</code></i>";

echo "<br>New line in PHP<br>New Line";
$dec = sprintf("%.4f", 237);
echo "<br>" . $dec;

echo "<h2>Php arithmetic operations</h2>";
$x = 29; // Variable 1
$y = 4; // Variable 2

// Some arithmetic operations on
// these two variables
echo "{$x}+{$y} = ", ($x + $y), "<br>";
echo "{$x}-{$y} = ", ($x - $y), "<br>";
echo "{$x}*{$y} = ", ($x * $y), "<br>";
echo "{$x}/{$y} = ", ($x / $y), "<br>";
echo "{$x}%{$y} = ", ($x % $y), "<br>";

echo "<h2>Php Logical Operators</h2>";
$x = 50;
$y = 30;
if ($x == 50 and $y == 30)
    echo "and Success <br>";

if ($x == 50 or $y == 20)
    echo "or Success <br>";

if ($x == 50 xor $y == 20)
    echo "xor Success <br>";

if ($x == 50 && $y == 30)
    echo "&& Success <br>";

if ($x == 50 || $y == 20)
    echo "|| Success <br>";

if (!$z) //similar with (!NULL) because undeclared variables are null by default.
    echo "! Success <br>";
var_dump($z);

echo "<h2>Php Comparison Operators</h2>";
$a = 80;
$b = 50;
$c = "80";

echo "{$a} == {$b}: ";
var_dump($a == $c);
echo "<br>{$a} != {$b}: ";
var_dump($a != $b);
echo "<br>{$a} <> {$b}: ";
var_dump($a <> $b);
echo "<br>{$a} === {$b}: ";
var_dump($a === $c);
echo "<br>{$a} !== {$b}: ";
var_dump($a !== $c);
echo "<br>{$a} < {$b}: ";
var_dump($a < $b);
echo "<br>{$a} > {$b}: ";
var_dump($a > $b);
echo "<br>{$a} <= {$b}: ";
var_dump($a <= $b);
echo "<br>{$a} >= {$b}: ";
var_dump($a >= $b);

// let $hjfg
echo "<h2>Php trim function</h2>";
echo trim("Hello World!", "Hed!");

echo "<h2>Php Arrays</h2>";
$array = [2, 3, 4, 5, 'fd', 'df', 'qw', 'sd'];

echo "<h5>Print List using iterator</h5>";
foreach ($array as $index => $value) {
    echo '@' . $index . ": {$value}<br>";
}

echo "<h5>Print Array List using var_dump</h5>";
var_dump($array);

echo "<h5>Print Array List using print_r</h5>";
print_r($array);

echo "<h2>Php Associative Arrays</h2>";
$dob = [
    'day' => 23,
    'month' => 4,
    'year' => 1993
];
$array = [
    'name' => 'WONDIMU',
    'age' => 29,
    'dob' => $dob,
    'place_of_birth' => 'Bishoftu'
];
$array[] = [
    'name' => 'WONDIMU2',
    'age' => 27,
    'dob' => $dob,
    'place_of_birth' => 'Debrezeit'
];

echo "<h5>Print Associative Array List using var_dump</h5><pre>";
var_dump($array);
echo "</pre>";

echo "<h5>Print Associative Array List using print_r</h5><pre>";
print_r($array);
echo "</pre>";


if (in_array("name", array_keys($array))) {
    echo "The array List contains key 'name' ";
}

var_dump($array['name']);


echo "<h3>Pass by Value/Reference</h3>";
// pass by value
function valProf($num)
{
    $num += 2;
    return $num;
}

// pass by reference
function refProf(&$num)
{
    $num += 10;
    return $num;
}

$n = 10;

valProf($n);
echo "<br>The original value is still $n";

refProf($n);
echo "<br>The original value changes to $n";


echo "<h2>Working with Dates in PHP</h2>";
echo "". strtotime('now')."<br>";
echo "". strtotime('4 May 2020')."<br>";
echo "". strtotime('+1 day')."<br>";
echo "". strtotime('+1 month')."<br>";
echo "". strtotime('last Sunday')."<br>";

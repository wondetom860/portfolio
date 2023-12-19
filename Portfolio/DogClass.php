<?php
class DogClass {
    public $name,$age,$color;
    public function __construct($name) {
    $this->name=$name;
    }
}

$boby = new DogClass('Bobby');
$boby->age = '6';
$boby->color = 'White';

var_dump($boby);

echo'<br>';
$miky = new DogClass('Miky');
var_dump($miky);
?>
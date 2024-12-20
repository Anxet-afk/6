<?php

require 'vendor/autoload.php';

use MyProject\Person;
use MyProject\OutOfRangeException;

$person = new Person("Аня");

$agesToTest = [4, -2, 11, 1500];

foreach ($agesToTest as $age) {
    try {
        $person->setAge($age);
        echo "Возраст установлен: " . $person->getAge() . "\n";
    } catch (OutOfRangeException $e) {
        echo "Ошибка: " . $e->getMessage() . "\n";
    }
}

<?php
require 'vendor/autoload.php';

use App\MagicClass;

echo "=== Демонстрация магических методов ===\n";

$obj = new MagicClass();

$obj->someMethod();

MagicClass::someStaticMethod();

$value = $obj->someProperty;

$obj->someProperty = 'test';

isset($obj->someProperty);

unset($obj->someProperty);

echo $obj . "\n";

$obj();

var_dump($obj);

$obj2 = clone $obj;

$serialized = serialize($obj);
$obj3 = unserialize($serialized);

unset($obj);
echo "=== Конец демонстрации ===\n";
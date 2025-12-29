<?php
require 'vendor/autoload.php';

use App\MagicClass;

echo "=== Демонстрация магических методов ===\n";

// __construct
$obj = new MagicClass();

// __call
$obj->someMethod();

// __callStatic
MagicClass::someStaticMethod();

// __get
$value = $obj->someProperty;

// __set
$obj->someProperty = 'test';

// __isset
isset($obj->someProperty);

// __unset
unset($obj->someProperty);

// __toString
echo $obj . "\n";

// __invoke
$obj();

// __debugInfo
var_dump($obj);

// __clone
$obj2 = clone $obj;

// __sleep и __wakeup (через сериализацию)
$serialized = serialize($obj);
$obj3 = unserialize($serialized);

// __destruct (вызовется в конце скрипта)
unset($obj);
echo "=== Конец демонстрации ===\n";
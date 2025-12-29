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

echo "\n=== Геометрия ===\n";

use App\Point;
use App\Vector;

// Точка T1
$t1 = new Point(3, 4);
echo "Точка T1: ({$t1->x}, {$t1->y})\n";

// Вектор V1
$v1 = new Vector(2, 3);
echo "Вектор V1: ({$v1->x}, {$v1->y})\n";

// Нулевой вектор V2
$v2 = new Vector(0, 0);
echo "Вектор V2: ({$v2->x}, {$v2->y})\n";

// Вектор V3, перпендикулярный V1
$v3 = new Vector(-3, 2); // (2 * -3) + (3 * 2) = -6 + 6 = 0
echo "Вектор V3: ({$v3->x}, {$v3->y})\n";

// Длины векторов
echo "Длина V1: " . $v1->length() . "\n";
echo "Длина V2: " . $v2->length() . "\n";
echo "Длина V3: " . $v3->length() . "\n";

// Проверка перпендикулярности
if ($v3->isPerpendicularTo($v1)) {
    echo "V3 перпендикулярен V1: ДА\n";
} else {
    echo "V3 перпендикулярен V1: НЕТ\n";
}

// Перенос точки T1 на вектор V1
echo "До переноса T1: ({$t1->x}, {$t1->y})\n";
$t1->move($v1->x, $v1->y);
echo "После переноса T1: ({$t1->x}, {$t1->y})\n";ы
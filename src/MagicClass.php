<?php

namespace App;

class MagicClass
{
    public function __construct()
    {
        echo "__construct вызван\n";
    }

    public function __destruct()
    {
        echo "__destruct вызван\n";
    }

    public function __call($name, $arguments)
    {
        echo "__call вызван для метода: $name\n";
    }

    public static function __callStatic($name, $arguments)
    {
        echo "__callStatic вызван для метода: $name\n";
    }

    public function __get($name)
    {
        echo "__get вызван для свойства: $name\n";
    }

    public function __set($name, $value)
    {
        echo "__set вызван для свойства: $name\n";
    }

    public function __isset($name)
    {
        echo "__isset вызван для свойства: $name\n";
        return false;
    }

    public function __unset($name)
    {
        echo "__unset вызван для свойства: $name\n";
    }

    public function __toString()
    {
        echo "__toString вызван\n";
        return "MagicClass";
    }

    public function __invoke()
    {
        echo "__invoke вызван\n";
    }

    public function __debugInfo()
    {
        echo "__debugInfo вызван\n";
        return [];
    }

    public function __sleep()
    {
        echo "__sleep вызван\n";
        return [];
    }

    public function __wakeup()
    {
        echo "__wakeup вызван\n";
    }

    public function __clone()
    {
        echo "__clone вызван\n";
    }
}
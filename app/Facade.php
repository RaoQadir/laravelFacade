<?php

namespace App;

class Facade
{
    public static function __callStatic($name, $arguments)
    {
        return app()->make(static::getFacadeAccessor())->$name;
    }
}

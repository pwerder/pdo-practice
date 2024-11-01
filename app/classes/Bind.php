<?php

namespace Pwerder\PdoPractice\classes;

class Bind
{
    private static $bind =  [];
    public static function bind(string $key, mixed $value): void
    {
        static::$bind[$key] = $value;
    }

    public static function get(string $key): mixed
    {
        return static::$bind[$key];
    }
}

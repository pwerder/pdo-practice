<?php

namespace Pwerder\PdoPractice\classes;

class Uri
{
    public static function load(): string
    {
        return parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
    }
}

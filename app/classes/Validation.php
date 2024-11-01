<?php

namespace Pwerder\PdoPractice\classes;

class Validation
{
    private array $validate = [];

    public function validate(array $post): object
    {
        foreach ($post as $key => $value) {
            $this->validate[$key] = filter_var($value, FILTER_SANITIZE_SPECIAL_CHARS);
        }
        return (object) $this->validate;
    }
}

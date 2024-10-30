<?php

namespace Pwerder\PdoPractice\models\querybuilder;

class Insert
{
    public static function sql(string $table, array $attributes): string
    {
        $sql = "INSERT INTO {$table} (";
        $sql .= implode(', ', array_keys($attributes)) . ') VALUES (';
        $sql .= ':' . implode(', :', array_keys($attributes)) . ')';
        return $sql;
    }
}

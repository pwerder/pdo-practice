<?php

namespace Pwerder\PdoPractice\models\querybuilder;

class Update
{
    private array $where;

    public function where(array $where): self
    {
        $this->where = $where;
        return $this;
    }

    public function sql(string $table, array $attributes): string
    {
        $sql = "UPDATE {$table} SET ";
        unset($attributes[array_keys($this->where)[0]]);
        
        foreach ($attributes as $key => $value) {
            $sql .= "{$key} = :{$key}, ";
        }

        $sql = rtrim($sql, ", ");

        $where = array_keys($this->where);

        $sql .= " WHERE {$where[0]} = :{$where[0]};";
        
        return $sql;
    }
}

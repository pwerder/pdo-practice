<?php

namespace Pwerder\PdoPractice\traits;

use Pwerder\PdoPractice\models\querybuilder\Insert;

trait PersistDb
{
    public function insert(array $attributes): bool 
    {
        $sql = Insert::sql($this->table, $attributes);
        $insert = $this->connection->prepare($sql);
        return $insert->execute($attributes);
    }
}

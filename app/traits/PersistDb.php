<?php

namespace Pwerder\PdoPractice\traits;

use Pwerder\PdoPractice\models\querybuilder\Insert;
use Pwerder\PdoPractice\models\querybuilder\Update;

trait PersistDb
{
    public function insert(object $attributes): bool 
    {
        $attributes = (array) $attributes;
        $sql = Insert::sql($this->table, $attributes);
        $insert = $this->connection->prepare($sql);
        return $insert->execute($attributes);
    }

    public function update(object $attributes, array $where): int
    {
        $attributes = (array) $attributes;
        $sql = (new Update)->where($where)->sql($this->table, $attributes);
        $update = $this->connection->prepare($sql);
        $update->execute($attributes);
        return $update->rowCount();
    }
}

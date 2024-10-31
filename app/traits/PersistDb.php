<?php

namespace Pwerder\PdoPractice\traits;

use Pwerder\PdoPractice\models\querybuilder\Insert;
use Pwerder\PdoPractice\models\querybuilder\Update;

trait PersistDb
{
    public function insert(array $attributes): bool 
    {
        $sql = Insert::sql($this->table, $attributes);
        $insert = $this->connection->prepare($sql);
        return $insert->execute($attributes);
    }

    public function update(array $attributes, array $where): int
    {
        $sql = (new Update)->where($where)->sql($this->table, $attributes);
        $update = $this->connection->prepare($sql);
        $update->execute($attributes);
        return $update->rowCount();
    }
}

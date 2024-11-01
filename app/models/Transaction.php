<?php

namespace Pwerder\PdoPractice\models;

use Closure;
use Exception;

class Transaction extends Model
{
    public function transactions(Closure $callback)
    {
        $this->connection->beginTransaction();
        try {
            $callback();
            $this->connection->commit();
        } catch (Exception $e) {
            $this->connection->rollBack();
            dd($e->getMessage());
        }
    }

    public function model($model)
    {
        return new $model;
    }
}

<?php

namespace Pwerder\PdoPractice\models;

use Pwerder\PdoPractice\classes\Bind;
use Pwerder\PdoPractice\traits\PersistDb;

abstract class Model
{
    use PersistDb;

    protected string $table;
    protected $connection;

    public function __construct()
    {
        $this->connection = Bind::get('connect');
    }

    public function all(): array
    {
        $sql = "SELECT * FROM {$this->table}";
        $stmt = $this->connection->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll();
    }

    public function find(string $id)
    {
        $sql = "SELECT * FROM {$this->table} WHERE id = :id";
        $stmt = $this->connection->prepare($sql);
        $stmt->execute(["id"=> $id]);
        return $stmt->fetch();
    }
}

<?php

namespace Pwerder\PdoPractice\models;

abstract class Model
{
    protected string $table;
    private $connection;

    public function __construct()
    {
        $this->connection = Connection::connect();
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

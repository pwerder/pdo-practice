<?php

namespace Pwerder\PdoPractice\models;

use PDO;

class Connection
{
    public static function connect()
    {
        $pdo = new PDO("sqlite:db.sqlite");
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);
        return $pdo;
    }
}

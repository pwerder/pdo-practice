<?php

use Pwerder\PdoPractice\classes\Routes;
use Pwerder\PdoPractice\classes\Uri;
use Pwerder\PdoPractice\models\Connection;

require __DIR__ . '/../bootstrap.php';

$routes = [
    '/' => 'controllers/indexController'
];

try {
    require Routes::load($routes, Uri::load());
} catch (Exception $e) {
    echo $e->getMessage();
}
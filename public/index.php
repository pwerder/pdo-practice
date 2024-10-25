<?php

use Pwerder\PdoPractice\classes\Routes;
use Pwerder\PdoPractice\classes\Uri;

require __DIR__ . '/../bootstrap.php';

$routes = [
    '/' => 'controllers/index'
];

try {
    require Routes::load($routes, Uri::load());
} catch (Exception $e) {
    echo $e->getMessage();
}
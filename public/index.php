<?php

use Pwerder\PdoPractice\classes\Layout;
use Pwerder\PdoPractice\classes\Routes;
use Pwerder\PdoPractice\classes\Uri;

require __DIR__ . '/../bootstrap.php';

$routes = [
    '/' => 'controllers/indexController'
];

try {
    $layout = new Layout;

    require Routes::load($routes, Uri::load());
    require $layout->master('layout');
} catch (Exception $e) {
    echo $e->getMessage();
}
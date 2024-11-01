<?php

use Pwerder\PdoPractice\classes\Bind;
use Pwerder\PdoPractice\models\Connection;

require __DIR__ . '/vendor/autoload.php';

Bind::bind('connect', Connection::connect());

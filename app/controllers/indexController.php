<?php

use Pwerder\PdoPractice\models\User;

$users = (new User)->all();


require "../app/views/home.php";
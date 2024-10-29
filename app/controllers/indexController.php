<?php

use Pwerder\PdoPractice\models\User;

$users = (new User)->all();


$layout->add('home');
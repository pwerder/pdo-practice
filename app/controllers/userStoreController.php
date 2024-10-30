<?php

use Pwerder\PdoPractice\models\User;

$user = new User;

$insert = $user->insert($_POST);

if ($insert) {
    header('Location: /');
    exit();
}

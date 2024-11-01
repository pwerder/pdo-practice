<?php

use Pwerder\PdoPractice\classes\Validation;
use Pwerder\PdoPractice\models\User;

$user = new User;

$validation = new Validation;
$validate = $validation->validate($_POST);
$insert = $user->insert($validate);

if ($insert) {
    header('Location: /');
    exit();
}

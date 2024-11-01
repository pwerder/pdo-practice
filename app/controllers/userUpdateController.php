<?php

use Pwerder\PdoPractice\classes\Validation;
use Pwerder\PdoPractice\models\User;

$id = filter_input(INPUT_POST, 'id', FILTER_SANITIZE_NUMBER_INT);

$user = new User();
$validation = new Validation;
$validate = $validation->validate($_POST);

$updated = $user->update($validate, ['id' => $id]);

if ($updated) {
    header('Location: /');
    exit();
} else {
    echo "Erro ao atualizar a pagina";
}
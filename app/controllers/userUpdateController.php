<?php

use Pwerder\PdoPractice\models\User;

$id = filter_input(INPUT_POST, 'id', FILTER_SANITIZE_NUMBER_INT);

$user = new User();

$updated = $user->update($_POST, ['id' => $id]);

if ($updated) {
    header('Location: /');
    exit();
} else {
    echo "Erro ao atualizar a pagina";
}
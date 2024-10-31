<?php

use Pwerder\PdoPractice\models\User;

$id = $_GET['id'];

$user = (new User())->find($id);

$layout->add("edit-user");

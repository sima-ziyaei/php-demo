<?php

use Core\Validator;
use Core\Database;


require base_path("Core/Validator.php");
$config = require base_path("config.php");
$db = new Database($config);
// $validator = new Validator();
$errors = [];

if (!Validator::string($_POST['word'], 1, 15)) {
    $errors['word'] = 'the word is not valid';
}

if (!empty($errors)) {
    return view("words/create.view.php", [
        'heading' => 'Create Word',
        'errors' => $errors
    ]);
}


$db->query(
    'INSERT INTO words(word) VALUES(:word)',
    [
        'word' => $_POST['word']
    ]
);
$res = $db->lastInsertId();
header("Location: /word?id=$res");

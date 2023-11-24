<?php

use Core\Database;
use Core\Validator;

$config = require base_path("config.php");
$db = new Database($config);
$errors = [];
$id = $_POST['id'];

$word = $db->query("select * from words where id = {$id} ");


if (!Validator::string($_POST['word'], 1, 15)) {
    $errors['word'] = 'the word is not valid';
}

if(!empty($errors)) {
    return view('words/edit.view.php',[
        'errors'=> $errors,
        'word'=> $word,
        'heading' => "Edit Note"
    ]);
}
$updatedWord  = $_POST['word'];
$id = $_POST['id'];

// dd( $updatedWord);
$db->query("UPDATE words SET word = '{$updatedWord}' WHERE id = {$id}");

header('location: /words');

die();
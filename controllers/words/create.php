<?php
spl_autoload_register( function ($class){
    require base_path("Core/{$class}.php");
 });
 
require base_path("Core/Validator.php");
$config = require base_path("config.php");
$db = new Database($config); 

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $errors = [];
    // $validator = new Validator();

    if (!Validator::string($_POST['word'], 1, 15)) {
        $errors['word'] = 'the word is not valid';
    }


    if (empty($errors)) {
        $db->query(
            'INSERT INTO words(word) VALUES(:word)',
            [
                'word' => $_POST['word']
            ]
        );
    }
    $res = $db->lastInsertId();
    header("Location: /word?id=$res");

}


view("words/create.view.php", [
    'heading' => 'Create Word',
    'errors' => $errors
]);
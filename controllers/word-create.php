<?php
require("Database.php");
$config = require("config.php");
$db = new Database($config);
$heading = "Create Word";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $errors = [];

    if(strlen($_POST['word']) === 0){
        $errors['word'] = 'A word is required';
    }

    if(strlen($_POST['word']) > 15){
        $errors['word'] = "The word can not be more than 15 characters";
    }

    if(empty($errors)){
        $db->query(
            'INSERT INTO words(word) VALUES(:word)',
            [
                'word' => $_POST['word']
            ]
        );
    }

    // header("Location: /word?id=3");
    // die();
    
    // $db->query('INSERT INTO translations(translation) VALUES(:translation)',
    // [
    //     'translation' => $_POST['translation'],
    //     // 'word_id' => $_POST[]
    // ]);
}

function getWord($db)
{

    $query = "select * from words where word = {$_POST['word']}";
    $word = $db->query($query);
    dd($word);
}
require 'views/word-create.view.php';
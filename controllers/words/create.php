<?php
require("Database.php");
require("Validator.php");
$config = require("config.php");
$db = new Database($config);
$heading = "Create Word";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $errors = [];
    // $validator = new Validator();

    if(! Validator::string($_POST['word'], 1, 15)){
        $errors['word'] = 'the word is not valid';
    }



    if(empty($errors)){
       $res  = $db->query(
            'INSERT INTO words(word) VALUES(:word)',
            [
                'word' => $_POST['word']
            ]
        );

    }
    // dd($res);
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
require 'views/words/create.view.php';
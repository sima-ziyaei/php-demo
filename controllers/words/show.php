<?php

use Core\Database;

$config = require base_path("config.php");
$db = new Database($config);

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $db->query('delete from words where id = :id',[
        'id' => $_GET['id']
    ]);

    header('location: /words');
    exit();

} else {

    $id = $_GET['id'];

    $query = "select * from words where id = {$id}";
    $query_translation = "select * from translations where word_id = {$id}";

    $word = $db->query($query);
    $translation = $db->query(($query_translation));

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $db->query(
            'INSERT INTO translations(translation, word_id) VALUES(:translation, :word_id)',
            [
                'translation' => $_POST['translation'],
                'word_id' => (int)$id
            ]
        );
    }

    if (!$word) {
        abort();
    }

    view("words/show.view.php", [
        'heading' => 'Word',
        'word' => $word,
        'translation' => $translation
    ]);
}

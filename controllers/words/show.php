<?php
require("Database.php");

$config = require("config.php");
$db = new Database($config);

$heading = "Word";

$id = $_GET['id'];

$query = "select * from words where id = {$id}";
$query_translation = "select * from translations where word_id = {$id}";

$word = $db->query($query);
$trnaslation = $db->query(($query_translation));

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

require "views/words/show.view.php";
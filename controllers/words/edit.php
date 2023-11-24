<?php

use Core\Database;

$config = require base_path("config.php");
$db = new Database($config);

$id = $_GET['id'];

$word = $db->query("select * from words where id = {$id} ");


view("words/edit.view.php", [
    'heading' => 'Edit Word',
    'errors'=> [],
    'word' => $word
]);
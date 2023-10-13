<?php

spl_autoload_register( function ($class){
    require base_path("Core/{$class}.php");
 });
 

$config = require base_path("config.php");

$db = new Database($config);

$url = $_SERVER["REQUEST_URI"];

$path = parse_url($url)['query'];

$words = $db->query("select * from words");

view("words/index.view.php", [
    'heading' => 'My words',
    'words' => $words,
]);
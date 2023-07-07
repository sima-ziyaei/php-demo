<?php
require("Database.php");

$config = require("config.php");
$db = new Database($config);

$heading = "Note";

$id = $_GET['id'];

// $query = "select * from words where id = ?";
$query = "select * from words where id = {$id}";
$query_translation = "select * from translations where word_id = {$id}";


$word = $db->query($query);
$trnaslation = $db->query(($query_translation));
// dd($trnaslation[0]["translation"]);
if(!$word){
    abort();
}

require "views/word.view.php";
<?php
require("Database.php");

$config = require("config.php");
$db = new Database($config);

$heading = "Word";

$id = $_GET['id'];

// $query = "select * from words where id = ?";
$query = "select * from words where id = {$id}";
$query_translation = "select * from translations where word_id = {$id}";


$word = $db->query($query);
$trnaslation = $db->query(($query_translation));

if(!$word){
    abort();
}

require "views/words/show.view.php";
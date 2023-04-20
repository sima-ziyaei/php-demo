<?php
require("Database.php");

$config = require("config.php");
$db = new Database($config);

$heading = "Note";

$id = $_GET['id'];

$word = $db->query("select * from words where id = {$id}");

require "views/note.view.php";
<?php
require("Database.php");

$config = require("config.php");

$db = new Database($config);

$heading = "Notes";

$url = $_SERVER["REQUEST_URI"];

$path = parse_url($url)['query'];

$words = $db->query("select * from words");

require "views/notes.view.php";
<?php

use Core\Database;

$config = require base_path("config.php");
$db = new Database($config);

$db->query('delete from words where id = :id', [
    'id' => $_GET['id']
]);

header('location: /words');
exit();

<?php

// return [
//     "/" => "controllers/index.php",
//     "/about" => "controllers/about.php",
//     "/words" => "controllers/words/index.php",
//     "/word" => "controllers/words/show.php",
//     "/words/create" => "controllers/words/create.php",
//     "/contact" => "controllers/contact.php"
// ];

$router->get("/","controllers/index.php");
$router->get("/about","controllers/about.php");
$router->get("/contact","controllers/contact.php");

$router->get("/words","controllers/words/index.php");
$router->get("/word","controllers/words/show.php");
$router->post("/word","controllers/words/show.php");

$router->delete("/word","controllers/words/destroy.php");

$router->post("/words/create","controllers/words/store.php");
$router->get("/words/create","controllers/words/create.php");

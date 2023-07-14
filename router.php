<?php

// if($url === "/"){
//     require("controllers/index.php");
// } else if($url === "/about"){
//     require("controllers/about.php");
// } else if($url === "/contact"){
//     require("controllers/contact.php");
// };

$url = $_SERVER["REQUEST_URI"];

$path = parse_url($url)['path'];

$routes = [
    "/" => "controllers/index.php",
    "/about" => "controllers/about.php",
    "/words" => "controllers/words.php",
    "/words/create" => "controllers/word-create.php",
    "/word" => "controllers/word.php",
    "/contact" => "controllers/contact.php"
];

function abort($code = 404)
{
    http_response_code($code);
    require("views/$code.php");
    die();
}

if (array_key_exists($path, $routes)) {
    require $routes[$path];
} else {
    abort();
}

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
    "/" => "controllers/words/index.php",
    "/about" => "controllers/about.php",
    "/words" => "controllers/words/index.php",
    "/words/create" => "controllers/words/create.php",
    "/word" => "controllers/words/show.php",
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

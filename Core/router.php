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

// $routes = [
//     "/" => "controllers/index.php",
//     "/about" => "controllers/about.php",
//     "/words" => "controllers/words/index.php",
//     "/words/create" => "controllers/words/create.php",
//     "/word" => "controllers/words/show.php",
//     "/contact" => "controllers/contact.php"
// ];

function routeToController($uri, $routes) {
    if(array_key_exists($uri, $routes)) {
        require base_path($routes[$uri]);
    } else {
        abort();
    }
}

function abort($code = 404)
{
    http_response_code($code);
    require("views/$code.php");
    die();
}

$routes = require base_path('routes.php');
$uri = parse_url($_SERVER['REQUEST_URI'])['path'];

routeToController($uri, $routes);

// if (array_key_exists($path, $routes)) {
//     require $routes[$path];
// } else {
//     abort();
// }

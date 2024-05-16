<?php
$uri = parse_url($_SERVER['REQUEST_URI'])['path'];

include('routes.php');

function routeToController($uri, $routes) {
    global $db;

    if(array_key_exists($uri, $routes)) {
        include($routes[$uri]);
    } else {
        abort();
    }
};


function abort($code = 404){
    header("Location: views/404.php");
};

routeToController($uri, $routes);
?>
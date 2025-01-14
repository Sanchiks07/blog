<?php

$uri = parse_url($_SERVER["REQUEST_URI"])["path"];
$routes = require "routes.php";

if (array_key_exists($uri, $routes)) {
    require $routes[$uri];
}
else {
    http_response_code(404);
    echo "<p>Atvainojiet, lapa netika atrasta!</p>";
    die();
}

?>
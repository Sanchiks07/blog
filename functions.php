<?php

// Dump and die (kopā ar dd)
function dd($data) {
    echo "<pre>";
    var_dump($data);
    echo "</pre>";
    die();
}

function redirectIfNotFound($location = "/") {
    http_response_code(404);
    header("Location: $location", 302);
    exit(); // tāds pats kā die(), bet maigāks
}

// dd($posts[0] ["content"]); (tam ir jābūt index.php failā, lai strādātu)

?>
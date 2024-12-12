<?php

// Dump and die (kopā ar dd)
function dd($data) {
    echo "<pre>";
    var_dump($data);
    echo "</pre>";
    die();
}

// dd($posts[0] ["content"]); (tam ir jābūt index.php failā, lai strādātu)

?>
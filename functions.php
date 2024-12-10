<?php

// Dump and die (kopā ar dd)
function dd($data) {
    echo "<pre>";
    var_dump($data);
    echo "</pre>";
    die();
}

?>
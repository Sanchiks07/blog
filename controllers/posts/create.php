<?php

require "views/posts/create.view.php";

dd($_SERVER["REQUEST_METHOD"]);

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $sql = "INSERT INTO posts (content) VALUES (:content)";
    $params = ["content" => $_POST["content"]];
    
    executeQuery($sql, $params);
    
    header("Location: /");
    exit();
}

$pageTitle = "Izveidot ierakstu";

?>
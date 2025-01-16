<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    
    $errors = [];

    if (!isset($_POST["content"]) == true || strlen($_POST["content"]) == 0 || strlen($_POST["content"]) > 50) {
        $errors["content"] = "Saturam jābūt ievadītam, bet ne garākam par 50 rakstzīmēm";
    }
    else if (empty($errors)) {
        $sql = "INSERT INTO posts (content) VALUES (:content)";
        $params = ["content" => $_POST["content"]];
        $post = $db->query($sql, $params)->fetch();
        
        header("Location: /");
        exit();
    }
}

$pageTitle = "Izveidot ierakstu";
$style = "css/style.css";
$style2 = "css/kop-style.css";
require "views/posts/create.view.php";

?>
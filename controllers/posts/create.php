<?php

require "Validator.php";

$sql = "SELECT * FROM categories";
$params = [];
$categories = $db->query($sql, $params)->fetchAll();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    $errors = [];

    if (!Validator::string($_POST["content"], max: 50)) {
        $errors["content"] = "Saturam jābūt ievadītam, bet ne garākam par 50 rakstzīmēm";
    }
    if (!empty($_POST["category_id"]) && !Validator::number($_POST["category_id"])) {
        $errors["category_id"] = "Saturam jābūt ievadītam";
    }
    else if (empty($errors)) {
        $sql = "INSERT INTO posts (content, category_id) VALUES (:content, :category_id)";
        $params = ["content" => $_POST["content"], "category_id" => $_POST["category_id"] ?: null];
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
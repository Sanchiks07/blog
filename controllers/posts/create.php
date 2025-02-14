<?php

require "Validator.php";

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    
    $errors = [];

    if (!Validator::string($_POST["content"], max: 50)) {
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
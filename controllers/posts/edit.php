<?php

require "Validator.php";

if(isset($_GET["id"])) {
    $sql = "SELECT * FROM posts WHERE id = :id;";
    $params = ["id" => $_GET["id"]];
    $post = $db->query($sql, $params)->fetch();
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    
    $errors = [];

    if (!Validator::string($_POST["content"], max: 50)) {
        $errors["content"] = "Saturam jābūt ievadītam, bet ne garākam par 50 rakstzīmēm";
    }
    else if (empty($errors)) {
        $sql = "UPDATE posts SET content = :content WHERE id = :id;";
        $params = ["content" => $_POST["content"], "id" => $_POST["id"]];
        $post = $db->query($sql, $params)->fetch();
        
        header("Location: /show?id=" . $_POST["id"]);
        exit();
    }
}

$pageTitle = "Rediģēt ierakstu";
$style = "css/style.css";
$style2 = "css/kop-style.css";
require "views/posts/edit.view.php";

?>
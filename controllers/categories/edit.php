<?php

require "Validator.php";

if(isset($_GET["id"])) {
    $sql = "SELECT * FROM categories WHERE id = :id;";
    $params = ["id" => $_GET["id"]];
    $post = $db->query($sql, $params)->fetch();
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    $errors = [];

    if (!Validator::string($_POST["category_name"], min: 3, max: 50)) {
        $errors["category_name"] = "Saturam jābūt ievadītam, bet ne īsākam par 3 un garākam par 50 rakstzīmēm";
    }
    else if (empty($errors)) {
        $sql = "UPDATE categories SET category_name = :category_name WHERE id = :id;";
        $params = ["category_name" => $_POST["category_name"], "id" => $_POST["id"]];
        $post = $db->query($sql, $params)->fetch();
        
        header("Location: /show?id=" . $_POST["id"]);
        exit();
    }
}

$pageTitle = "Rediģēt kategoriju";
$style = "css/style.css";
$style2 = "css/kop-style.css";
require "views/categories/edit.view.php";

?>
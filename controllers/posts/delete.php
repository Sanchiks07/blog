<?php

require "Validator.php";

if (!isset($_POST["id"])) {
    redirectIfNotFound();
}

if (!Validator::string($_POST["id"])) {
        $errors["content"] = "Dzēšana nav iespējama";
    }
    else if (empty($errors)) {
        $params = ["id" => $_POST["id"]];
        $sql = "DELETE FROM posts WHERE id = :id;";
        $post = $db->query($sql, $params)->fetch();
        
        header("Location: /");
        exit();
}

?>
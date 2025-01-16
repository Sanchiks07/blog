<?php

if (!isset($_GET["id"]) || $_GET["id"] == "") {
    redirectIfNotFound();
}

$sql = "SELECT * FROM posts WHERE id = :id";
$params = ["id" => $_GET["id"]];
$post = $db->query($sql, $params)->fetch();

if (!$post) {
    redirectIfNotFound();
}

$pageTitle = "Bloga ieraksts";
$style = "css/style3.css";
$style2 = "css/kop-style.css";
require "views/posts/show.view.php";

?>
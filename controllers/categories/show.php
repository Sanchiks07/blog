<?php

if (!isset($_GET["id"]) || $_GET["id"] == "") {
    redirectIfNotFound();
}

$sql = "SELECT * FROM categories WHERE id = :id";
$params = ["id" => $_GET["id"]];
$post = $db->query($sql, $params)->fetch();

if (!$post) {
    redirectIfNotFound();
}

$pageTitle = "Kategorija";
$style = "/css/style3.css";
$style2 = "/css/kop-style.css";
require "views/categories/show.view.php";

?>
<?php

$select = "SELECT * FROM categories";
$params = [];
$categories = $db->query($select, $params)->fetchAll();

$pageTitle = "Kategorijas";
$style = "/css/style.css";
$style2 = "/css/kop-style.css";
require "views/categories/index.view.php";

?>
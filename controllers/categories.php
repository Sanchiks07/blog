<?php

require "index.php";

$select = "SELECT * FROM categories";
$params = [];
if (isset($_GET["search_query"]) && $_GET["search_query"] != "") {
    $search_query = "%" . $_GET["search_query"] . "%";
    $select .= " WHERE category_name LIKE :kategorija;";
    $params = ["kategorija" => $search_query];
}
$categories = $db->query($select, $params)->fetchAll();

$pageTitle = "Kategorijas";
$style = "css/style.css";
$style2 = "css/kop-style.css";
require "views/categories.view.php";

?>
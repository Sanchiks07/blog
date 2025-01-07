<?php

echo "<link rel='stylesheet' href='blog.css'>";
require "Database.php";

$config = require ("config.php");
$db = new Database($config["database"]);

$select = "SELECT * FROM categories";
$params = [];
if (isset($_GET["search_query"]) && $_GET["search_query"] !="") {
    $search_query = "%" . $_GET["search_query"] . "%";
    $select .= " WHERE category_name LIKE :kategorija;";
    $params = ["kategorija" => $search_query];
}
$categories = $db->query($select, $params)->fetchAll();

echo "<h1>Kategorijas</h1>";

echo "<form>";
echo "<input name='search_query' />";
echo "<button>Meklēt</button>";
echo "</form>";

if (count($categories) == 0) {
    echo "Kategorija netika atrasta";
}

echo "<ul>";
foreach ($categories as $category) {
    echo "<li>" . $category["category_name"] . "</li>";
};
echo "</ul>";

?>
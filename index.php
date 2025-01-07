<?php

echo "<link rel='stylesheet' href='blog.css'>";

require "functions.php";
require "Database.php";

$config = require ("config.php");

// 1. Izveidot datu bāzi ar tabulu ✅
// 2. Savienot PHP ar datu bāzi ✅ (DSN, PDO) (Database.php)
// 3. Ivadīt datus uz HTML ✅ (statement, dumb and die "dd" + PDO) (Database.php)

// fetchAll(PDO::FETCH_ASSOC) - Dabūt rezultātus kā asociatīvo masīvu, const = 2

// db, nosaukums, parole, lietotājvārds
// mysql_connect ❌

// Mērķis: Uztaisīt filtru - ierakstu meklēšana (06.01.25.)
// 1. Izveidot moklēšnas joslu: HTML forma, kurā ir input un submit poga ✅
// 2. Kaut kā sarakstīt PHP ✅
// 3. Atgriezt datus no SQL datu bāzes ✅

$db = new Database($config["database"]);
$posts = $db->query("SELECT * FROM posts;")->fetchAll();

if (isset($_GET["search_query"]) && $_GET["search_query"] !="") {
    $posts = $db->query("SELECT * FROM posts WHERE content LIKE '%" . $_GET["search_query"] . "%';")->fetchAll();
};

echo "<h1>Blogsss</h1>";

echo "<form>";
echo "<input name='search_query' />";
echo "<button>Meklēt</button>";
echo "</form>";

// Ar foreach izvadīt content
echo "<ul>";
foreach ($posts as $post) {
    echo "<li>" . $post["content"] . "</li>";
};
echo "</ul>";

?>
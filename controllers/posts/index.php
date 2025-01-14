<?php

require "index.php";

// 1. Izveidot datu bāzi ar tabulu ✅
// 2. Savienot PHP ar datu bāzi ✅ (DSN, PDO) (Database.php)
// 3. Ivadīt datus uz HTML ✅ (statement, dumb and die "dd" + PDO) (Database.php)

// fetchAll(PDO::FETCH_ASSOC) - Dabūt rezultātus kā asociatīvo masīvu, const = 2
// " \"nam " - \ nozīmē "escape", lai nākamās pēdiņas neņem kā nobeigumu priekš simbolu virknes

// Mērķis: Uztaisīt filtru - ierakstu meklēšana (06.01.25.)
// 1. Izveidot moklēšnas joslu: HTML forma, kurā ir input un submit poga ✅
// 2. Kaut kā sarakstīt PHP ✅
// 3. Atgriezt datus no SQL datu bāzes ✅

$select = "SELECT * FROM posts";
$params = [];
if (isset($_GET["search_query"]) && $_GET["search_query"] !="") {
    $search_query = "%" . $_GET["search_query"] . "%";
    $select .= " WHERE content LIKE :nosaukums;"; // Sagatavotais vaicājums
    $params = ["nosaukums" => $search_query]; // Saistītais parametrs
}
$posts = $db->query($select, $params)->fetchAll();

$pageTitle = "Blogs";
$style = "css/style.css";
require "views/posts/index.view.php"; // vienmēr atrodas faila pēdējā rindā

?>
<?php

require "functions.php";
require "Database.php";

$config = require ("config.php");

echo    "<style>
            body {
                background-color: #800808;
                color: white;
                font-size: 20px;
                font-family: Consolas;
            }
        </style>";

echo "heloings! <br><br>";

// 1. Izveidot datu bāzi ar tabulu ✅
// 2. Savienot PHP ar datu bāzi ✅ (DSN, PDO) (Database.php)
// 3. Ivadīt datus uz HTML ✅ (statement, dumb and die "dd" + PDO) (Database.php)
// fetchAll(PDO::FETCH_ASSOC) - Dabūt rezultātus kā asociatīvo masīvu, const = 2

// db, nosaukums, parole, lietotājvārds
// mysql_connect ❌

$db = new Database($config["database"]);
$posts = $db->query("SELECT * FROM posts")->fetchAll(PDO::FETCH_ASSOC);

// Ar foreach izvadīt content
echo "<ul>";
foreach ($posts as $post) {
    echo "<li>" . $post["content"] . "</li>";
};
echo "</ul>";

?>
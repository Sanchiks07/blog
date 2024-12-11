<?php

require "functions.php";
require "Database.php";

echo    "<style>
            body {
                background-color: #800808;
                color: white;
                font-size: 20px;
            }
        </style>";

echo "heloings! <br><br>";

// 1. Izveidot datu bāzi ar tabulu ✔
// 2. Savienot PHP ar datu bāzi ✔ (DSN, PDO) (Database.php)
// 3. Ivadīt datus uz HTML ✔ (statement, dumb and die "dd" + PDO) (Database.php)

// db, nosaukums, parole, lietotājvārds
// mysql_connect ❌

$db = new Database();
$posts = $db->query("SELECT * FROM posts");

// dd($posts[0] ["content"]);

// Ar foreach izvadīt content
echo "<ul>";
foreach ($posts as $post) {
    echo "<li>" . $post["content"] . "</li>";
};
echo "</ul>";

?>
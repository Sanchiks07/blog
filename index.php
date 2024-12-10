<?php

echo    "<style>
            body {
                background-color: #FC8EAC;
                color: white;
                font-size: 20px;
            }
        </style>";

echo "heloings! <br><br>";

// 1. Izveidot datu bāzi ar tabulu ✔
// 2. Savienot PHP ar datu bāzi ✔ (DSN, PDO)
// 3. Ivadīt datus  (statement)

// db, nosaukums, parole, lietotājvārds
// mysql_connect ❌

// Data Source Name
$dsn = "mysql:host=localhost;port=3306;user=root;password=;dbname=blog_ipb23;charset=utf8mb4";

// PDO - PHP Data Object
$pdo = new PDO($dsn);

// 1. Sagatavot vaicājumu (statement)
$statement = $pdo->prepare("SELECT * FROM posts");
// 2. Izpildīt statement
$statement->execute();
// 3. Dabūt rezultātus
$posts = $statement->fetchAll();

echo "<pre>";
var_dump($posts);
echo "</pre>";

?>
<?php

echo "heloings!";

// 1. Izveidot datu bāzi ar tabulu ✔
// Savienot PHP ar datu bāzi

// db, nosaukums, parole, lietotājvārds
// mysql_connect ❌

// Data Source Name
$dsn = "mysql:host=localhost;port=3306;user=root;password=;dbname=blog_ipb23;charset=utf8mb4";

// PDO - PHP Data Object
$pdo = new PDO($dsn);



?>
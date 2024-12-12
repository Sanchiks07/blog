<?php

class Database {
    public $pdo;

    // Konstruktors - izpildās vienu reizi, kad objekts uztaisīts
    public function __construct() { // izpildās jau uzreiz, tpc nevajag connect
        // DSN - Data Source Name
        $dsn = "mysql:host=localhost;port=3306;user=root;password=;dbname=blog_ipb23;charset=utf8mb4";
        // PDO - PHP Data Object (klase)
        $this->pdo = new PDO($dsn); // objekts = klase
        $this->pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
    }

    public function query($sql) {
        // 1. Sagatavot vaicājumu (statement)
        $statement = $this->pdo->prepare($sql); // prepare("vaicājums") - metode
        // 2. Izpildīt statement
        $statement->execute(); // execute - metode
        return $statement;
    }
}

?>
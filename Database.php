<?php

class Database {
    public function query($sql) {
        // DSN - Data Source Name
        $dsn = "mysql:host=localhost;port=3306;user=root;password=;dbname=blog_ipb23;charset=utf8mb4";
        // PDO - PHP Data Object (klase)
        $pdo = new PDO($dsn); // objekts = klase

        // 1. Sagatavot vaicājumu (statement)
        $statement = $pdo->prepare($sql); // prepare("vaicājums") - metode
        // 2. Izpildīt statement
        $statement->execute(); // execute - metode
        // 3. Dabūt rezultātus kā asociatīvo masīvu
        $data = $statement->fetchAll(PDO::FETCH_ASSOC); // const = 2

        return $data; // vajadzīgie dati
    }
}

?>
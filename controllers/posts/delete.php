<?php

if (!isset($_POST["id"])) {
    $params = ["id" => $_POST["id"]];
    $sql = "DELETE FROM posts WHERE id = :id;";
    $post = $db->query($sql, $params)->fetch();

    header("Location: /");
    exit();
}
else {
    redirectIfNotFound();
}

?>
<?php

if (isset($_POST["id"])) {
    $sql = "DELETE FROM posts WHERE id = :id;";
    $params = ["id" => $_POST["id"]];
    $post = $db->query($sql, $params)->fetch();

    header("Location: /");
    exit();
}
else {
    redirectIfNotFound();
}

?>
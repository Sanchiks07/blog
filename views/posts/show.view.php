<?php require "views/components/header.php" ?>
<?php require "views/components/navbar.php" ?>

<div class="container">
    <h1><?= htmlspecialchars($post["content"]) ?></h1>

    <button><a href="edit?id=<?= $post["id"] ?>">Rediģēt ierakstu</button>
</div>
    
<?php require "views/components/footer.php" ?>